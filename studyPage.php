<html>
<head>
    <title>Elimika Platform</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="index.css">
</head>
    <body>
        <div class="study">
        <div class="topics">
                <h3 class="Topic" id="Topics" >Topics</h3>
                <ol> <b>
                    <li  class="Topic1" ><p><a href="#">Numbers</a></p>
                            <!-- <div class="subtopics">
                                <ol>
                                    <li><a href="#">Subtopic 1</a></li>
                                    <li><a href="#">Subtopic 2</a></li>
                                    <li><a href="#">Subtopic 3</a></li>
                                    <li><a href="#">Subtopic 4</a></li>
                                </ol>
                            </div> -->
                            <app-subs></app-subs>
                        
                    </li>
                    <li   class="Topic1" ><p><a href="#" id="Topic" >Addition</a></p>
                        <app-subs></app-subs>
                    </li>
                    <li  class="Topic1" ><p><a href="#" id="Topic" >Subtraction</a></p>
                        <app-subs></app-subs>
                    </li>
                    <li  class="Topic1" ><p><a href="#" id="Topic" >Division</a></p>
                        <app-subs></app-subs>
                    </li>
                    <li  class="Topic1" ><p><a href="#" id="Topic" class="active" >Multiplication</a></p>
                        <app-subs></app-subs>
                    </li>      </b>
                </ol>
                <button class="remove">Remove</button>
            </div>

            <div id="menu-btn" class="fas fa-bars"></div>

            <div class="content">
                <h2>Grade 1 Mathematics</h2>
                <p> <b>
                    <label for="studyProgress">Your Progress</label>
                    <progress id="studyProgress" value="85" max="100"></progress> 85%
                </b>
                </p>
                <h3> <u> 5. Multiplication</u></h3>
                <div>
                    <app-first></app-first>
                </div>
            </div>
        </div>
       <script src="index.js"></script>     
    </body>

</html>