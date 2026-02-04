// ==========================================
// 1. GLOBAL STATE
// ==========================================
let current = 0;
const total = 9; // page0 through page8
let audioCtx = null;
let matchedPairs = []; 

// The master truth for all questions - Ensure ALL IDs in reqs are here
const answers = { 
    q0_1: false, q0_2: false, q2_1: false, 
    q3_1: false, q3_2: false, q3_3: false, q3_4: false,
    q4_1: false, q4_2: false, q4_3: false, q4_4: false, q4_5: false, q4_6: false, q4_7: false, q4_8: false,
    q5_1: false,
    q6_1: false, q6_2: false, q6_3: false, q6_4: false, q6_5: false, q6_6: false, q6_7: false, q6_8: false, q6_9: false, q6_10: false, q6_11: false, q6_12: false, q6_13: false
};

// Requirements Mapping
const reqs = { 
    0: ['q0_1', 'q0_2'], 
    1: [], 
    2: ['q2_1'], 
    3: ['q3_1', 'q3_2', 'q3_3', 'q3_4'], 
    4: ['q4_1', 'q4_2', 'q4_3', 'q4_4', 'q4_5', 'q4_6', 'q4_7', 'q4_8'], 
    5: ['q5_1'],
    6: ['q6_1', 'q6_2', 'q6_3', 'q6_4', 'q6_5', 'q6_6', 'q6_7', 'q6_8','q6_9','q6_10','q6_11','q6_12','q6_13'] 
};

// ==========================================
// FUNCTIONS
// ==========================================

function checkPage() {
    const r = reqs[current];
    // Strict check: every requirement MUST be explicitly 'true'
    const ok = !r || r.length === 0 || r.every(id => answers[id] === true);
    
    const nextBtn = document.getElementById('btnNext');
    if (nextBtn) {
        nextBtn.disabled = !ok;
    }
}

function changePage(step) {
    const oldPage = document.getElementById(`page${current}`);
    if (oldPage) oldPage.classList.remove('active');

    current += step;

    const newPage = document.getElementById(`page${current}`);
    if (newPage) {
        newPage.classList.add('active');
        window.scrollTo(0, 0);
    }

    // 1. Fix Back Button
    const backBtn = document.getElementById('btnBack');
    if (backBtn) backBtn.disabled = (current === 0);

    // 2. Fix Next/Finish Button Text & Logic
    const nextBtn = document.getElementById('btnNext');
    if (nextBtn) {
        // (total - 1) because current starts at 0 and goes to 8
        nextBtn.innerText = (current === total - 1) ? "Finish (समाप्त)" : "Next (अगाडि)";
    }

    // 3. Fix Progress Bar (Matching the ID 'pb' in your JS)
    const pb = document.getElementById('pb');
    if (pb) {
        pb.style.width = (current / (total - 1) * 100) + "%";
    }

    // 4. Re-validate the new page immediately
    checkPage();
}

// Initialize
window.addEventListener('load', () => {
    checkPage();
});
// ==========================================
// 2. CORE ENGINES (Audio & Speech)
// ==========================================
function playSystemSound(frequency, duration, type) {
    try {
        if (!audioCtx) audioCtx = new (window.AudioContext || window.webkitAudioContext)();
        if (audioCtx.state === 'suspended') audioCtx.resume();
        const oscillator = audioCtx.createOscillator();
        const gainNode = audioCtx.createGain();
        oscillator.type = type;
        oscillator.frequency.setValueAtTime(frequency, audioCtx.currentTime);
        gainNode.gain.setValueAtTime(0.1, audioCtx.currentTime);
        gainNode.gain.exponentialRampToValueAtTime(0.01, audioCtx.currentTime + duration);
        oscillator.connect(gainNode);
        gainNode.connect(audioCtx.destination);
        oscillator.start();
        oscillator.stop(audioCtx.currentTime + duration);
    } catch (e) { console.log("Audio blocked"); }
}

function playSuccessShimmer() {
    const notes = [{f:523.25,d:0.1,t:'sine'},{f:659.25,d:0.1,t:'sine'},{f:783.99,d:0.1,t:'sine'},{f:1046.5,d:0.4,t:'sine'}];
    notes.forEach((n, i) => setTimeout(() => playSystemSound(n.f, n.d, n.t), i * 60));
}

function playErrorSound() { playSystemSound(150, 0.3, 'sawtooth'); }

// Puter Speech Logic
const playSpeech = (text, isMale = false) => {
    puter.ai.txt2speech(text, {
        voice: isMale ? "Stephen" : "Ruth",
        engine: "neural", language: "en-US"
    }).then(audio => audio.play()).catch(e => console.error(e));
};

// ==========================================
// 3. PAGE LOGIC & NAVIGATION
// ==========================================
// ==========================================
// 3. PAGE LOGIC & NAVIGATION (Consolidated)
// ==========================================

function checkPage() {
    const r = reqs[current];
    // Strict check: every requirement MUST be explicitly 'true'
    const ok = !r || r.length === 0 || r.every(id => answers[id] === true);
    
    const nextBtn = document.getElementById('btnNext');
    if (nextBtn) {
        nextBtn.disabled = !ok;
        nextBtn.style.opacity = ok ? "1" : "0.5"; // Visual hint
    }
}

function changePage(step) {
    const oldPage = document.getElementById(`page${current}`);
    if (oldPage) oldPage.classList.remove('active');

    current += step;

    const newPage = document.getElementById(`page${current}`);
    if (newPage) {
        newPage.classList.add('active');
        window.scrollTo(0, 0);
    }

    // Fix Back Button
    const backBtn = document.getElementById('btnBack');
    if (backBtn) backBtn.disabled = (current === 0);

    // Fix Next/Finish Button Text (Uses 'total')
    const nextBtn = document.getElementById('btnNext');
    if (nextBtn) {
        if (current === total - 1) {
            nextBtn.innerText = "Finish (समाप्त)";
            nextBtn.onclick = () => alert("Lesson Completed! (पाठ पूरा भयो!)");
        } else {
            nextBtn.innerText = "Next (अगाडि)";
            nextBtn.onclick = () => changePage(1);
        }
    }

    // Fix Progress Bar (Uses 'total')
    const pb = document.getElementById('pb');
    if (pb) {
        pb.style.width = (current / (total - 1) * 100) + "%";
    }

    checkPage();
}
// ==========================================
// 4. INTERACTION HANDLERS
// ==========================================

// MCQ Handler
function handleQuiz(btn, isCorr, qid) {
    const wrapper = btn.closest('.options-wrapper') || btn.closest('.quiz-block');
    wrapper.querySelectorAll('.option').forEach(o => o.classList.remove('correct', 'wrong'));
    
    if(isCorr) { 
        btn.classList.add('correct'); 
        answers[qid] = true; 
        playSuccessShimmer();
    } else { 
        btn.classList.add('wrong'); 
        answers[qid] = false; 
        playErrorSound();
    }
    checkPage();
}

// Text Input Handler
function validateAnswer(button, keyword, qid) {
    const wrapper = button.closest('.input-wrapper');
    const input = wrapper.querySelector('.quiz-input');
    const userText = input.value.trim().toLowerCase();

    if (userText.includes(keyword.toLowerCase())) {
        input.style.borderColor = "#27ae60";
        input.style.backgroundColor = "#f1fbf5";
        wrapper.querySelector('.status-icon').innerHTML = "&#9989;";
        answers[qid] = true;
        playSuccessShimmer();
    } else {
        input.style.borderColor = "#e74c3c";
        input.classList.add('shake');
        setTimeout(() => input.classList.remove('shake'), 400);
        playErrorSound();
    }
    checkPage();
}

// Phrase Selection Logic
function updateGreetingCounter() {
    const totalNeeded = document.querySelectorAll('.phrase.correct').length;
    const currentFound = document.querySelectorAll('.clicked-correct').length;
    const counterDisplay = document.getElementById('greeting_count');
    if(counterDisplay) counterDisplay.innerText = currentFound;

    if (currentFound === totalNeeded) {
        document.getElementById('q4_8_area').style.border = "3px solid #28a745";
        answers['q4_8'] = true;
        checkPage();
    }
}

// --- MATCHING LOGIC ---
const matchingState = {
    selected: null,
    correctCount: 0,
    totalPairs: 8, // Adjust based on your actual pairs
    matchedPairs: [] // Stores elements to redraw on resize
};

document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.getElementById('q5_1');
    const svg = document.getElementById('match-svg');

    if (!wrapper || !svg) return;

    answers['q5_1'] = false; 
    checkPage();

    wrapper.addEventListener('click', (e) => {
        const item = e.target.closest('.match-item');
        
        // Ignore if not a match-item, already correct, or clicking a speak button
        if (!item || item.classList.contains('correct') || e.target.closest('.speak_btn')) return;

        // 1. Selection Logic
        if (!matchingState.selected) {
            matchingState.selected = item;
            item.classList.add('selected');
        } else {
            const first = matchingState.selected;
            const second = item;

            // If clicking the same item, deselect
            if (first === second) {
                first.classList.remove('selected');
                matchingState.selected = null;
                return;
            }

            // If clicking another item in the same column, switch selection
            if (first.parentNode === second.parentNode) {
                first.classList.remove('selected');
                second.classList.add('selected');
                matchingState.selected = second;
                return;
            }

            // 2. Validation Logic
            if (first.dataset.pair === second.dataset.pair) {
                // SUCCESS
                first.className = 'match-item correct';
                second.className = 'match-item correct';
                
                drawLine(first, second, '#4CAF50'); // Green line
                matchingState.matchedPairs.push({a: first, b: second});
                
                if (typeof playSuccessShimmer === 'function') playSuccessShimmer();
                
                matchingState.correctCount++;
                if (matchingState.correctCount === matchingState.totalPairs) {
                    answers['q5_1'] = true; // Updates your global progress
                    if (typeof checkPage === 'function') checkPage();
                }
            } else {
                // ERROR
                first.classList.add('incorrect');
                second.classList.add('incorrect');
                drawLine(first, second, '#f44336', true); // Temporary Red line
                
                if (typeof playErrorSound === 'function') playErrorSound();

                setTimeout(() => {
                    first.classList.remove('selected', 'incorrect');
                    second.classList.remove('incorrect');
                }, 800);
            }
            matchingState.selected = null;
        }
    });

    // 3. Line Drawing Function
    function drawLine(el1, el2, color, isTemp = false) {
        const rect1 = el1.getBoundingClientRect();
        const rect2 = el2.getBoundingClientRect();
        const wRect = wrapper.getBoundingClientRect();

        const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
        
        // Calculate coordinates relative to the wrapper
        const x1 = (el1.closest('#left-col') ? rect1.right : rect1.left) - wRect.left;
        const y1 = (rect1.top + rect1.height / 2) - wRect.top;
        const x2 = (el2.closest('#right-col') ? rect2.left : rect2.right) - wRect.left;
        const y2 = (rect2.top + rect2.height / 2) - wRect.top;

        line.setAttribute('x1', x1);
        line.setAttribute('y1', y1);
        line.setAttribute('x2', x2);
        line.setAttribute('y2', y2);
        line.setAttribute('stroke', color);
        line.setAttribute('stroke-width', '3');
        if (isTemp) line.setAttribute('stroke-dasharray', '5,5');
        
        svg.appendChild(line);
        if (isTemp) setTimeout(() => line.remove(), 800);
    }

    // 4. Resize Handler (Redraws lines when window changes)
    window.addEventListener('resize', () => {
        svg.innerHTML = '';
        matchingState.matchedPairs.forEach(p => drawLine(p.a, p.b, '#4CAF50'));
    });
});
// ==========================================
// 5. INITIALIZATION & EVENT DELEGATION
// ==========================================
window.onload = () => {
    checkPage();

    // Universal Click Listener
    document.addEventListener('click', (e) => {
        // Speech
        const speakBtn = e.target.closest('.speak_btn');
        if (speakBtn) {
            const text = document.getElementById(speakBtn.dataset.target).innerText;
            playSpeech(text, speakBtn.dataset.voice === 'male');
        }

        // Phrase Clicks
        if (e.target.classList.contains('phrase')) {
            const item = e.target;
            if (item.classList.contains('clicked-correct')) return;
            if (item.classList.contains('correct')) {
                item.classList.add('clicked-correct');
                updateGreetingCounter();
            } else {
                item.classList.add('clicked-wrong');
                setTimeout(() => item.classList.remove('clicked-wrong'), 800);
            }
        }
    });

    // Resize SVG lines
    window.addEventListener('resize', () => {
        const svg = document.getElementById('match-svg');
        if(svg) {
            svg.innerHTML = '';
            matchedPairs.forEach(p => drawLine(p.a, p.b, '#4CAF50'));
        }
    });
};

function toggleTooltip() { document.getElementById("infoTooltip").classList.toggle("show"); }
function toggleFlip(card) { card.querySelector('.flip-card-inner').classList.toggle('is-flipped'); }

window.addEventListener('load', () => {
    // Reset any accidentally saved states
    answers['q5_1'] = false; 
    
    // Set all Page 6 answers to false if they aren't already
    reqs[6].forEach(id => {
        if (answers[id] === undefined) answers[id] = false;
    });

    checkPage(); // Lock the first page if it has requirements
});