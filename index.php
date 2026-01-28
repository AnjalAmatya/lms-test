<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L1 English - Section 1: Full Content</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/puter.js"></script>
</head>
<body>

<header>
    <div class="progress-wrapper"><div class="progress-bar" id="pb"></div></div>
    <strong><button class="speak_btn" id="speak-button1">&#128266;</button><span id="speak1">Section 1: Greetings </span>(अभिवादन)</strong>
    <script>
        document.getElementById('speak-button1').addEventListener('click', () => {
            const text = document.getElementById('speak1').innerText;
            puter.ai.txt2speech(text, {
                voice: "Ivy",
                engine: "neural",
                language: "en-US"
            }).then((audio) => {
                audio.play();
            }).catch((error) => {
                console.error("Speech Error:", error);
            });
        });
        </script>
</header>

<main>
 
        <h2><button class="speak_btn" id="speak-button2">&#128266;</button><span id="speak2">Pre-Assessment </span><span class="nepali-sub">पूर्व-मूल्याङ्कन</span></h2>
        <script>
        document.getElementById('speak-button2').addEventListener('click', () => {
            const text = document.getElementById('speak2').innerText;
            puter.ai.txt2speech(text, {
                voice: "Danielle",
                engine: "generative",
                language: "en-US"
            }).then((audio) => {
                audio.play();
            }).catch((error) => {
                console.error("Speech Error:", error);
            });
        });
        </script>
        
        <p>
            <button class="speak_btn" id="speak-button3">&#128266;</button>
            <span id="speak3">Let's check your current knowledge before we start. </span>
            <span class="nepali-sub">सुरु गर्नु अघि तपाईंको हालको ज्ञान परीक्षण गरौँ।</span>
        </p>

        <script>
        document.getElementById('speak-button3').addEventListener('click', () => {
            const text = document.getElementById('speak3').innerText;
            puter.ai.txt2speech(text, {
                voice: "Danielle",
                engine: "generative",
                language: "en-US"
            }).then((audio) => {
                audio.play();
            }).catch((error) => {
                console.error("Speech Error:", error);
            });
        });
        </script>
        
        <div class="quiz-block" data-qid="q0_1">
            <p><button class="speak_btn" id="speak-button4">&#128266;</button>
                <strong>1.<span id="speak4"> Which greeting is used in the morning?</span> <span class="nepali-sub">बिहानको समयमा कुन अभिवादन प्रयोग गरिन्छ?</span></strong></p>
            <script>
            document.getElementById('speak-button4').addEventListener('click', () => {
                const text = document.getElementById('speak4').innerText;
                puter.ai.txt2speech(text, {
                    voice: "Danielle",
                    engine: "generative",
                    language: "en-US"
                }).then((audio) => {
                    audio.play();
                }).catch((error) => {
                    console.error("Speech Error:", error);
                });
            });
            </script>
            <div class="option_row">
            <button class="speak_btn" id="speak-button5">&#128266;</button><button class="option" onclick="handleQuiz(this, true, 'q0_1')"><span id="speak5">Good Morning</span> <small>(शुभ प्रभात)</small></button>
            <script>
            document.getElementById('speak-button5').addEventListener('click', () => {
                const text = document.getElementById('speak5').innerText;
                puter.ai.txt2speech(text, {
                    voice: "Ivy",
                    engine: "neural",
                    language: "en-US"
                }).then((audio) => {
                    audio.play();
                }).catch((error) => {
                    console.error("Speech Error:", error);
                });
            });
            </script>
            </div>
            <div class="option_row">
            <button class="speak_btn" id="speak-button6">&#128266;</button><button class="option" onclick="handleQuiz(this, false, 'q0_1')"><span id="speak6">Good Afternoon</span> <small>(शुभ अपराह्न)</small></button>
            <script>
            document.getElementById('speak-button6').addEventListener('click', () => {
                const text = document.getElementById('speak6').innerText;
                puter.ai.txt2speech(text, {
                     voice: "Ivy",
                    engine: "neural",
                    language: "en-US"
                }).then((audio) => {
                    audio.play();
                }).catch((error) => {
                    console.error("Speech Error:", error);
                });
            });
            </script>
            </div>
        </div>

        <div class="quiz-block" data-qid="q0_2">
            <p><strong>2. How do you respond to "How are you?" <span class="nepali-sub">"तपाईंलाई कस्तो छ?" भनेर सोध्दा के जवाफ दिनुहुन्छ?</span></strong></p>
            <button class="option" onclick="handleQuiz(this, true, 'q0_2')">I am fine, thank you. <small>(मलाई ठिक छ, धन्यवाद।)</small></button>
            <button class="option" onclick="handleQuiz(this, false, 'q0_2')">Nice to meet you. <small>(तपाईंलाई भेटेर खुसी लाग्यो।)</small></button>
        </div>
    </div>

    <div id="page1" class="page">
        <h2>Learning Objectives <span class="nepali-sub">सिकाइका उद्देश्यहरू</span></h2>
        <div class="instruction-box">
            <ul>
                <li>Greet and respond in English and Mother Tongue. <span class="nepali-sub">अंग्रेजी र मातृभाषामा अभिवादन र प्रतिक्रिया दिन।</span></li>
                <li>Identify formal and informal greetings. <span class="nepali-sub">औपचारिक र अनौपचारिक अभिवादनहरू चिन्न।</span></li>
                <li>Understand body language and gestures. <span class="nepali-sub">शारीरिक भाषा र इसाराहरू बुझ्न।</span></li>
            </ul>
        </div>
        <h3>Gestures <span class="nepali-sub">इसाराहरू</span></h3>
        <p>In Nepal, we often use 'Namaste'. In English, we might wave or shake hands. <span class="nepali-sub">नेपालमा हामी 'नमस्ते' गर्छौँ। अंग्रेजीमा हात हल्लाउने वा हात मिलाउने गरिन्छ।</span></p>
        
        <div class="quiz-block" data-qid="q1_1">
            <p><strong>Which gesture is most common for 'Namaste'? <span class="nepali-sub">'नमस्ते' गर्दा कुन इसारा सबैभन्दा बढी प्रयोग गरिन्छ?</span></strong></p>
            <button class="option" onclick="handleQuiz(this, true, 'q1_1')">Joining two palms together <small>(दुई हत्केला जोड्ने)</small></button>
            <button class="option" onclick="handleQuiz(this, false, 'q1_1')">Waving one hand <small>(एउटा हात हल्लाउने)</small></button>
        </div>
    </div>

    <div id="page2" class="page">
        <h2>Guess the Action <span class="nepali-sub">चित्र हेरेर अनुमान गरौँ</span></h2>
        <p>Look at the image below. What is happening? <span class="nepali-sub">तलको चित्र हेर्नुहोस्। त्यहाँ के भइरहेको छ?</span></p>
        <div style="background:#f1f5f9; padding:2rem; text-align:center; border-radius:15px; margin-bottom:1rem; border: 2px dashed #cbd5e1;">
            <img src="images/greetings.png" alt="Namaste">
        </div>
        <div class="quiz-block" data-qid="q2_1">
            <p><strong>What are the people doing? <span class="nepali-sub">मानिसहरू के गर्दैछन्?</span></strong></p>
            <button class="option" onclick="handleQuiz(this, true, 'q2_1')">They are greeting each other. <small>(अभिवादन गर्दैछन्)</small></button>
            <button class="option" onclick="handleQuiz(this, false, 'q2_1')">They are complaining. <small>(गुनासो गर्दैछन्)</small></button>
        </div>
    </div>

    <div id="page3" class="page">
        <h2>Mother Tongue Greetings <span class="nepali-sub">विभिन्न भाषामा अभिवादन</span></h2>
        <p>Flip the cards to see greetings in different languages: <span class="nepali-sub">विभिन्न भाषामा कसरी अभिवादन गरिन्छ हेर्न कार्ड पल्टाउनुहोस्:</span></p>
        <div class="flip-grid">
            <div class="flip-card" onclick="this.classList.toggle('flipped')">
                <div class="flip-inner"><div class="f-front">Maithili</div><div class="f-back">Pranaam</div></div>
            </div>
            <div class="flip-card" onclick="this.classList.toggle('flipped')">
                <div class="flip-inner"><div class="f-front">Nepal Bhasa</div><div class="f-back">Jwojwo-loppa</div></div>
            </div>
            <div class="flip-card" onclick="this.classList.toggle('flipped')">
                <div class="flip-inner"><div class="f-front">Limbu</div><div class="f-back">Sewaro</div></div>
            </div>
            <div class="flip-card" onclick="this.classList.toggle('flipped')">
                <div class="flip-inner"><div class="f-front">Bhojpuri</div><div class="f-back">Ram Ram</div></div>
            </div>
        </div>
    </div>

    <div id="page4" class="page">
        <h2>Formal & Informal <span class="nepali-sub">औपचारिक र अनौपचारिक</span></h2>
        <div class="instruction-box">
            <p><strong>Formal:</strong> Teachers, bosses, or strangers. <span class="nepali-sub">शिक्षक, हाकिम वा अपरिचित व्यक्तिसँग।</span></p>
            <p><strong>Informal:</strong> Friends and family. <span class="nepali-sub">साथीभाइ र परिवारसँग।</span></p>
        </div>
        <div class="quiz-block" data-qid="q4_1">
            <p><strong>You meet your Doctor. How should you greet? <span class="nepali-sub">तपाईं डाक्टरलाई भेट्नुहुन्छ। कसरी अभिवादन गर्नुहुन्छ?</span></strong></p>
            <button class="option" onclick="handleQuiz(this, true, 'q4_1')">"Good morning, Doctor." (Formal)</button>
            <button class="option" onclick="handleQuiz(this, false, 'q4_1')">"Yo! What's up?" (Informal)</button>
        </div>
    </div>

    <div id="page5" class="page">
        <h2>Time of Day <span class="nepali-sub">समय अनुसारको अभिवादन</span></h2>
        <div class="quiz-block" data-qid="q5_1">
            <p><strong>It is 2:00 PM. What do you say? <span class="nepali-sub">दिउँसोको २ बजेको छ। तपाईं के भन्नुहुन्छ?</span></strong></p>
            <button class="option" onclick="handleQuiz(this, true, 'q5_1')">Good Afternoon</button>
            <button class="option" onclick="handleQuiz(this, false, 'q5_1')">Good Morning</button>
        </div>
        <div class="quiz-block" data-qid="q5_2">
            <p><strong>Going to bed at 9:00 PM. You say: <span class="nepali-sub">राती ९ बजे सुत्न जाँदा भनिन्छ:</span></strong></p>
            <button class="option" onclick="handleQuiz(this, true, 'q5_2')">Good Night <small>(शुभ रात्री)</small></button>
            <button class="option" onclick="handleQuiz(this, false, 'q5_2')">Good Afternoon</button>
        </div>
    </div>

    <div id="page6" class="page">
        <h2>Vocabulary <span class="nepali-sub">शब्दावली</span></h2>
        <p>Click to see meanings: <span class="nepali-sub">अर्थ हेर्न क्लिक गर्नुहोस्:</span></p>
        <div class="flip-grid">
            <div class="flip-card" onclick="this.classList.toggle('flipped')">
                <div class="flip-inner"><div class="f-front">Fine</div><div class="f-back">ठीक छ</div></div>
            </div>
            <div class="flip-card" onclick="this.classList.toggle('flipped')">
                <div class="flip-inner"><div class="f-front">Understand</div><div class="f-back">बुझ्नु</div></div>
            </div>
            <div class="flip-card" onclick="this.classList.toggle('flipped')">
                <div class="flip-inner"><div class="f-front">Store</div><div class="f-back">पसल</div></div>
            </div>
            <div class="flip-card" onclick="this.classList.toggle('flipped')">
                <div class="flip-inner"><div class="f-front">Try Best</div><div class="f-back">सकेसम्म प्रयास गर्ने</div></div>
            </div>
        </div>
    </div>

    <div id="page7" class="page">
        <h2>Dialogue Practice <span class="nepali-sub">संवाद अभ्यास</span></h2>
        <div class="dialogue-box">
               <p>
                   <strong>Ramita:</strong> Good morning, Lalita. How are you today?
                   <span class="nepali-sub">शुभ प्रभात, ललिता। आज तिमीलाई कस्तो छ?</span>
               </p>
               <p>
                   <strong>Lalita:</strong> Good morning Ramita. I am doing just fine. How are you?
                   <span class="nepali-sub">शुभ प्रभात रमिता। मलाई ठिकै छ। तिमीलाई नि कस्तो छ?</span>
               </p>
               <p>
                   <strong>Ramita:</strong> I am doing great. Are you coming to my home today?
                   <span class="nepali-sub">मलाई धेरै राम्रो छ। के तिमी आज मेरो घर आउँदैछौ?</span>
               </p>
               <p>
                   <strong>Lalita:</strong> I hope I can, but I have to go to the doctor this afternoon.
                   <span class="nepali-sub">म आउने आशा गर्छु, तर आज दिउँसो म डाक्टरकहाँ जानुपर्नेछ।</span>
               </p>
               <p>
                   <strong>Ramita:</strong> Okay. I understand, but I hope you can come.
                   <span class="nepali-sub">हुन्छ, मैले बुझें, तर तिमी आउन सक्छौ भन्ने आशा छ।</span>
               </p>
               <p>
                   <strong>Lalita:</strong> I will try my best.
                   <span class="nepali-sub">म सकेसम्म प्रयास गर्नेछु।</span>
               </p>
               <p>
                   <strong>Ramita:</strong> Thanks, Lalita. Goodbye
                   <span class="nepali-sub">धन्यवाद, ललिता। बिदा त!</span>
               </p>
               <p>
                   <strong>Lalita:</strong> Goodbye.
                   <span class="nepali-sub">बिदा!</span>
               </p>
        </div>
        
        <div class="quiz-block" data-qid="q7_1">
            <p><strong>What is Lalita trying her best to do? <span class="nepali-sub">ललिताले के गर्न सक्दो प्रयास गर्नेछिन्?</span></strong></p>
            <button class="option" onclick="handleQuiz(this, false, 'q7_1')">To go to the doctor. <small>(डाक्टरकहाँ जानको लागि।)</small></button>
            <button class="option" onclick="handleQuiz(this, true, 'q7_1')">To go to Ramita's home. <small>(रमिताको घर जानको लागि।)</small></button>
        </div>
    </div>

    <div id="page8" class="page">
        <h2>Matching <span class="nepali-sub">सही उत्तर छान्नुहोस्</span></h2>
        <div class="quiz-block" data-qid="q8_1">
            <p><strong>"How do you do?"</strong></p>
            <button class="option" onclick="handleQuiz(this, true, 'q8_1')">Response: "How do you do?"</button>
            <button class="option" onclick="handleQuiz(this, false, 'q8_1')">Response: "Nothing much."</button>
        </div>
        <div class="quiz-block" data-qid="q8_2">
            <p><strong>"What's up?"</strong></p>
            <button class="option" onclick="handleQuiz(this, true, 'q8_2')">Response: "Nothing much." <small>(केही खास छैन।)</small></button>
            <button class="option" onclick="handleQuiz(this, false, 'q8_2')">Response: "I am fine."</button>
        </div>
    </div>

    <div id="page9" class="page">
        <h2>Section 1 Completed! <span class="nepali-sub">खण्ड १ सम्पन्न भयो!</span></h2>
        <div class="instruction-box" style="background: #f0fdf4;">
            <p>You have learned: <span class="nepali-sub">तपाईंले सिक्नुभयो:</span></p>
            <ul>
                <li>Greetings and responses. <span class="nepali-sub">अभिवादन र प्रतिक्रियाहरू।</span></li>
                <li>Gestures (Namaste). <span class="nepali-sub">शारीरिक इसारा (नमस्ते)।</span></li>
                <li>Formal vs Informal. <span class="nepali-sub">औपचारिक र अनौपचारिक प्रयोग।</span></li>
            </ul>
        </div>
        <center><h3>Ready for Section 2? <span class="nepali-sub">के तपाईं खण्ड २ को लागि तयार हुनुहुन्छ?</span></h3></center>
    </div>
</main>

<div class="footer-nav">
    <button class="btn btn-back" id="btnBack" onclick="changePage(-1)" disabled>Back (पछाडि)</button>
    <button class="btn btn-next" id="btnNext" onclick="changePage(1)" disabled>Next (अगाडि)</button>
</div>

<script>
    let current = 0;
    const total = 10;
    const answers = { 
        q0_1: false, q0_2: false, q1_1: false, q2_1: false, 
        q4_1: false, q5_1: false, q5_2: false, q7_1: false, q8_1: false, q8_2: false 
    };
    const reqs = { 
        0: ['q0_1', 'q0_2'], 1: ['q1_1'], 2: ['q2_1'], 3: [], 
        4: ['q4_1'], 5: ['q5_1', 'q5_2'], 6: [], 7: ['q7_1'], 8: ['q8_1', 'q8_2'], 9: [] 
    };

    function handleQuiz(btn, isCorr, qid) {
        const opts = btn.parentElement.querySelectorAll('.option');
        opts.forEach(o => o.classList.remove('correct', 'wrong'));
        if(isCorr) { btn.classList.add('correct'); answers[qid] = true; }
        else { btn.classList.add('wrong'); answers[qid] = false; }
        checkPage();
    }

    function checkPage() {
        const r = reqs[current];
        const ok = r.every(id => answers[id] === true);
        document.getElementById('btnNext').disabled = !ok;
    }

    function changePage(step) {
        document.getElementById(`page${current}`).classList.remove('active');
        current += step;
        document.getElementById(`page${current}`).classList.add('active');
        document.getElementById('btnBack').disabled = (current === 0);
        document.getElementById('pb').style.width = (current / (total-1) * 100) + "%";
        
        const nextBtn = document.getElementById('btnNext');
        if(current === total-1) nextBtn.innerText = "Finish (समाप्त)";
        else nextBtn.innerText = "Next (अगाडि)";
        
        checkPage();
        window.scrollTo(0,0);
    }
</script>
</body>
</html>