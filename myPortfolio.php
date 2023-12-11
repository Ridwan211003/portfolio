<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio IT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <nav>
        <ul>
            <div class="logo">
                <span>Ridwan Saputra Sofyansah</span>
            </div>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#education">Educations</a></li>
            <li><a href="#course">Courses & Certificates</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="home">
        <div class="header-content">
            <img src="img/profile2.png" alt="Ridwan Saputra Sofyansah" class="profile-photo">
        </div>
        <div class="text-content">
            <h1>Ridwan Saputra Sofyansah</h1>
            <h3>Software Engineer | Web Development | Front End Developer</h3>
            <p>My name is Ridwan Saputra Sofyansah, and I am a passionate IT professional
                currently studying at Mercu Buana University. My focus is on software engineer,
                web development, and front end developer.</p><br>
        </div>
    </section>

    <section id="about">
        <div class="about-content">
            <div class="text-content">
                <h1>About Me</h1>
                <p>Hi everyone! My name is Ridwan Saputra Sofyansah, I am an informatics engineering student
                    at Mercu Buana University with a GPA of 3.85. I am a highly motivated person,
                    equipped with integrity and purpose.</p>
                <p>I am very interested in technology (IT), especially in the fields of Software Engineer,
                    Web Development, Front End Developer, and Data Analyst. I enjoy taking on challenges that allow me
                    to expand my knowledge and skills.</p>
                <p>I like taking online courses or seminars with an IT theme with the aim of developing the skills
                    and abilities that I have. I am committed to continuing to learn and staying up to date
                    with the latest technological developments to provide high quality solutions.</p>
                <a href="https://drive.google.com/file/d/1An3oWbvC-xo4zRbgIRI-4tUTfYALMJQL/view?usp=sharing" class="cv-button">Curriculum Vitae (CV)</a>
            </div>
            <div class="photo-container">
                <img src="img/profile.png" alt="Ridwan Saputra Sofyansah" class="about-photo">
            </div>
        </div>
    </section>

    <section id="education">
        <h1>Educations</h1>
        <ul>
            <li>
                <div class="header-content">
                    <a href="https://www.mercubuana.ac.id/id">
                        <img src="img/mercu.jpg" alt="Mercu Buana University" width="200px" height="200px">
                    </a>
                </div>
                <div class="text-content">
                    <h2>Mercu Buana University (2021 - Present)</h2>
                    <h3>Informatics Engineering<br>GPA : 3.85 / 4.00</h3>
                </div>
            </li>
            <li>
                <div class="header-content">
                    <a href="https://www.smamutiara-17agustus.sch.id/">
                        <img src="img/mta.png" alt="utiara 17 Agustus High School" width="200px" height="200px">
                    </a>
                </div>
                <div class="text-content">
                    <h2>Mutiara 17 Agustus High School (2018 - 2021)</h2>
                    <h3>Natural Science (IPA)<br>Average Score : 91.56 / 100</h3>
                </div>
            </li>
        </ul>
    </section>

    <section id="course">
        <h1>Courses & Certificates</h1>
        <div class="courses"></div>
        <h2>My Courses<br><br>
            <a href="https://www.dicoding.com">
                <img src="img/dicoding.jpg" alt="Dicoding Indonesia Logo" width="200px" height="200px">
            </a>
            <a href="https://skilvul.com">
                <img src="img/Skilvul.png" alt="Skilvul Logo" width="200px" height="200px">
            </a>
            <a href="https://myskill.id">
                <img src="img/MySkill.png" alt="MySkill Logo" width="200px" height="200px">
            </a>
            <a href="https://codingstudio.id">
                <img src="img/CodingStudio.png" alt="Coding Studio Logo" width="200px" height="200px">
            </a>
        </h2>
        </div>

        <div class="certificates">
            <h2>My Certificates<br><br>
                <a href="https://www.dicoding.com/certificates/4EXGN8DVDZRL">
                    <img src="img/sertif1.png" alt="Sertifikat Dicoding 1">
                </a>
                <a href="https://www.dicoding.com/certificates/NVP7OE5YOPR0">
                    <img src="img/sertif2.png" alt="Sertifikat Dicoding 2">
                </a>
                <a href="https://www.dicoding.com/certificates/0LZ09NLG0Z65">
                    <img src="img/sertif3.png" alt="Sertifikat Dicoding 3">
                </a>
                <a href="https://skilvul.com/courses/html-dasar/student/cloz6pnck0d3a01ldnbbspmg5">
                    <img src="img/sertif4.png" alt="Sertifikat Skilvul 1">
                </a>
                <a href="https://skilvul.com/paths/coding-di-skilvul-playground/student/cloz6pn3r0d3901ldj3k35i1b">
                    <img src="img/sertif5.png" alt="Sertifikat Skilvul 2">
                </a>
                <a href="https://storage.googleapis.com/myskill-v2-certificates/course-kBWmcuFm6FpYXybl2Tak/QwlSnVC5tKa5fvetx1tENs5UBFG2-4mQs2sv0yFnMf7JYapnJ.pdf">
                    <img src="img/sertif6.png" alt="Sertifikat MySkill">
                </a>
                <a href="https://codingstudio.id/certificate/77DF99775B-77DFA9A589-75BB3CEC36/">
                    <img src="img/sertif7.png" alt="Sertifikat Coding Studio">
                </a>
            </h2>
        </div>
    </section>

    <section id="skills">
        <h1>My Skills</h1>
        <button onclick="showTechStack()">Tech Stack</button>
        <button onclick="showTools()">Tools</button>

        <div id="techStackContent" class="hidden">
            <ul>
                <li>
                    <img src="img/html.png" alt="HTML Logo"><br>
                    HTML
                </li>
                <li>
                    <img src="img/css.png" alt="CSS Logo"><br>
                    CSS
                </li>
                <li>
                    <img src="img/php.png" alt="PHP Logo"><br>
                    PHP
                </li>
                <li>
                    <img src="img/js.png" alt="JavaScript Logo"><br>
                    JavaScript
                </li>
                <li>
                    <img src="img/bootstrap.png" alt="Bootstrap Logo"><br>
                    Bootstrap
                </li>
                <li>
                    <img src="img/codeigniter.png" alt="CodeIgniter Logo"><br>
                    CodeIgniter
                </li>
                <li>
                    <img src="img/wordpress.png" alt="Wordpress Logo"><br>
                    Wordpress
                </li>
                <li>
                    <img src="img/python.png" alt="Python Logo"><br>
                    Python
                </li>
                <li>
                    <img src="img/c++.png" alt="C++ Logo"><br>
                    C++
                </li>
                <li>
                    <img src="img/mysql.png" alt="MySQL Logo"><br>
                    MySQL
                </li>
                <li>
                    <img src="img/oracle.png" alt="Oracle Logo"><br>
                    Oracle
                </li>
            </ul>
        </div>

        <div id="toolsContent" class="hidden">
            <ul>
                <li>
                    <img src="img/vscode.png" alt="Visual Studio Code Logo"><br>
                    Visual Studio Code
                </li>
                <li>
                    <img src="img/github.png" alt="Github Logo"><br>
                    Github
                </li>
                <li>
                    <img src="img/xampp.png" alt="XAMPP Logo"><br>
                    XAMPP
                </li>
                <li>
                    <img src="img/netbeans.png" alt="NetBeans Logo"><br>
                    NetBeans
                </li>
                <li>
                    <img src="img/figma.png" alt="Figma Logo"><br>
                    Figma
                </li>
            </ul>
        </div>
    </section>

    <script>
        function showTechStack() {
            var techStackContent = document.getElementById("techStackContent");
            var toolsContent = document.getElementById("toolsContent");

            techStackContent.style.display = "block";
            toolsContent.style.display = "none";

            console.log("Tech Stack button clicked");
        }

        function showTools() {
            var techStackContent = document.getElementById("techStackContent");
            var toolsContent = document.getElementById("toolsContent");

            techStackContent.style.display = "none";
            toolsContent.style.display = "block";

            console.log("Tools button clicked");
        }
    </script>


    <section id="contact">
        <h1>Contact Me</h1>
        <p><img src="img/whatsapp.png" alt="WhatsApp Icon"> : 088212858875</p>
        <p><img src="img/linkedin.png" alt="LinkedIn Icon"> : linkedin.com/in/ridwansaputrasofyansah</p>
        <p><img src="img/gmail.png" alt="Gmail Icon"> : ridwansaputra.s.211003@gmail.com</p>
        <p><img src="img/instagram.png" alt="Instagram Icon"> : @ridwan.2110</p>
        <p><img src="img/twitter.png" alt="Twitter Icon"> : @ridwannn2110</p>
    </section>

    <footer>
        <h2>Ridwan Saputra Sofyansah</h2>
        <h3>Software Engineer | Web Development | Front End Developer</h3><br>
        <div class="footer-buttons">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#education">Educations</a>
            <a href="#course">Courses & Certificates</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
        </div>

        <div class="social-icons">
            <a href="https://wa.me/6288212858875" target="_blank" rel="noopener noreferrer">
                <img src="img/whatsapp.png" alt="WhatsApp">
            </a>
            <a href="https://linkedin.com/in/ridwansaputrasofyansah" target="_blank" rel="noopener noreferrer">
                <img src="img/linkedin.png" alt="LinkedIn">
            </a>
            <a href="mailto:ridwansaputra.s.211003@gmail.com" target="_blank" rel="noopener noreferrer">
                <img src="img/gmail.png" alt="Gmail">
            </a>
            <a href="https://github.com/Ridwan211003" target="_blank" rel="noopener noreferrer">
                <img src="img/github.png" alt="GitHub">
            </a>
            <a href="https://www.instagram.com/ridwan.2110" target="_blank" rel="noopener noreferrer">
                <img src="img/instagram.png" alt="Instagram">
            </a>
            <a href="https://www.twitter.com/ridwannn2110" target="_blank" rel="noopener noreferrer">
                <img src="img/twitter.png" alt="Twitter">
            </a>
        </div>

        <p>&copy; 2023 Created by Ridwan Saputra Sofyansah. All rights reserved.</p>
    </footer>

</body>

</html>