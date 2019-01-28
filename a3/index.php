<!DOCTYPE html>
<html lang='en'>
<?php
require_once("tools.php");
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 3</title>
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Montserrat|Slabo+27px|" rel="stylesheet">
    <!--    points to where the java script is stored-->
    <script src="js/script.js"></script>

    <script>window.onscroll = function(){
            console.clear();
            let navlinks = document.getElementsByTagName("nav")[0].children;
            console.log(navlinks);
            let articles = document.getElementsByTagName("main")[0].children;
            console.log(articles);
            last = articles[articles.length -1].getBoundingClientRect().top;
            

            if (last <=0){
                console.log('last');
                navlinks[navlinks.length -1].classList.add("active");
                for (j = 0; j < navlinks.length -1; j++)
                    navlinks[j].classList.remove("active");
            } else {
                navlinks[articles.length -1].classList.remove("active");
                for (i = 1; i < articles.length; i++) {
                    prev = articles[i -1].getBoundingClientRect().top;
                    next = articles[i].getBoundingClientRect().top;
                    log = prev + ' ' + next;
                    if (prev <= -100 && next > 0) {
                        log += '<----------' +(i -1);
                        navlinks [i -1].classList.add("active");
                        
                    } else {
                        log +=' xxxx ';
                        navlinks [i -1].classList.remove("active");
                        
                    }
                    console.log(log);
                }
                
            }
        }
    
    
    
    </script>
</head>

<body onclick="testEventTarget(event)" ; onload="hideSections()">

    <header>


        <div>

            <h1 id="top">The Lunardo Cinema</h1>
            <h2 id="tagline">The real cinema experience, since 1922</h2>
        </div>
    </header>


    <!--
    <div id="nav">
        <ul>
            <li><a href="#about" >About Us</a></li>
            <li><a href="#seats">Seats and Prices</a></li>
            <li><a href="#showing">Now Showing</a></li>
            <li><a href="#booking">Booking</a></li>
        </ul>
    </div> 
    
-->
    <div id="nav">
        <nav>
            <a href="#about" class="navigation">About Us</a>
            <a href="#seats" class="navigation">Seats and Prices</a>
            <a href="#showing" class="navigation">Now Showing</a>
            <a href="#booking" class="navigation">Booking</a>
        </nav>

    </div>


    <main>
        <article id="about" class="ib">
            <h2>About Us</h2>
            <p>The Lunardo Cinema was first opened in August 1922, when it was called 'The Portland' and was popular with locals and out-of-towners who would travel from far and wide to experience the magic of the motion picture in one of the finest examples of art deco architecture. At the time of its opening it was one of the only cinemas in Victoria able to show movies in <a href='https://en.wikipedia.org/wiki/70_mm_film' target="_blank">70 mm</a> - a higher resolution film gauge than standard 35mm film. Since that time, we have been a firm favourite with movie-buffs and cinema goers looking to see the magic of movies presented as the film makers intended.
                <figure>
                    <!-- Image of portland cinema sourced from https://www.freeimages.com/ all pictures are royalty free-->
                    <img src="../../media/old-portland-cinema.jpg" width="350" height="350" alt="The Lunardo Cinema" />
                    <br />
                    <figcaption>The Lunardo Cinema</figcaption>
                </figure>
            </p>

            <p>To ensure we are able to maintain our tradition of presenting films in their best possible light we have recently invested millions of dollars upgrading our projection and sound systems to the lastest <a href='http://www.dolby.com/us/en/platforms/dolby-cinema.html' target="_blank">Dolby Cinema</a> standards. With Dolby Vision projection and Dolby Atmos sound you will see and hear a movie like never before, setting a new standard in cinema immersion.
            </p>
            <p>For your viewing comfort we have also refurbished all our seating - we are now proud to offer new levels of upgraded seating in both standard and first-class seating. With our first-class seating we are taking luxury to new heights with our 160-degree motorised reclining leather seats.</p>

            <p>Whether you are local to our town or travelling from further afield you will find visiting the Lunardo is an experience you cannot get at your general multiplex cinema. Please come and experience the true magic of the movies - at The Lunardo Cinema.</p>
            <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
            <!--commented out this 'under contstruction image          
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />-->
        </article>
        <article id="seats" class="ib">
            <h2>Seats and Prices</h2>
            <p>
                We now offer two types of seating, Standard and First-Class, both offer much improved levels of comformt and relaxation. </p>
            <h4>First-Class Seat Features</h4>
            <ul class="seat_list">
                <li>Luxurious aesthetic</li>
                <li>Fully reclining seat</li>
                <li>Two individual motors</li>
                <li>Central processor</li>
                <li>Footrest sensor option</li>
                <li>Easy lift system</li>
                <li>Underseat lighting</li>
                <li>Auto-return footrest option</li>
            </ul>
            <figure>
                <img src="../../media/first-class_Verona-Twin.png" width="350" height="350" alt="First Class Seat" />
                <br />
                <figcaption>The new first-class seat with motorised recline</figcaption>
            </figure>

            <h4>Standard Class Seat Features</h4>
            <ul class="seat_list">
                <li>Leather headrest for extended durability</li>
                <li>Multi-angled positioned backrest</li>
                <li>No finger traps</li>
            </ul>
            <figure>
                <img src="../../media/standard-seat.jpg" width="450" height="350" alt="Standard Seat" />
                <br />
                <figcaption>The new standard seat</figcaption>
            </figure>

            <p>The Cinema offers discounted pricing weekday afternoons (ie weekday matinée sessions) and all day on Mondays and Wednesdays. </p>

            <!--get the table from PHP function rather than having HMTL in the page-->
            <?php
movieTable();
?>


            <!--
            <table>
                <tr>
                    <th>Seat Type</th>
                    <th>Seat Code</th>
                    <th>All day Monday and Wednesday AND 12pm on Weekday</th>
                    <th>All other times</th>
                </tr>
                <tr>
                    <th>Standard Adult</th>
                    <td>STA</td>
                    <td>$ 14.00</td>
                    <td>$ 19.80</td>

                </tr>
                <tr>
                    <th>Standard Concession</th>
                    <td>STP</td>
                    <td>$ 12.50</td>
                    <td>$ 17.50</td>

                </tr>
                <tr>
                    <th>Standard Child</th>
                    <td>STC</td>
                    <td>$ 11.00</td>
                    <td>$ 15.30</td>

                </tr>
                <tr>
                    <th>First Class Adult</th>
                    <td>FCA</td>
                    <td>$ 24.00</td>
                    <td>$ 30.00</td>

                </tr>
                <tr>
                    <th>First Class Concession</th>
                    <td>FCP</td>
                    <td>$ 22.50</td>
                    <td>$ 27.00</td>

                </tr>
                <tr>
                    <th>First Class Child</th>
                    <td>FCC</td>
                    <td>$ 21.00</td>
                    <td>$ 24.00</td>

                </tr>
            </table>
-->



        </article>
        <article id="showing" class="ib">
            <h2>Now Showing</h2>

            <!--            this code was sourced from W3 Schools
https://www.w3schools.com/CSS/tryit.asp?filename=trycss_website_layout_grid
-->

            <div class="row">
                <div class="column">
                    <!--                    <h2>Column</h2>-->
                    <img class=poster onclick="hideSections(); setMovieID('ACT')" src="../../media/The_Girl_in_the_Spider's_Web_poster.png" width="330" height="489" alt="The_Girl_in_the_Spider" />

                    <table>
                        <tr>
                            <th>The Girl in the Spider's Web (G)</th>

                        </tr>
                        <tr>
                            <td>Wednesday - 9 PM</td>
                        </tr>
                        <tr>
                            <td>Thurday - 9 PM</td>
                        </tr>
                        <tr>
                            <td>Friday - 9 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday - 6 PM</td>
                        </tr>
                        <tr>
                            <td>Sunday - 6 PM</td>
                        </tr>

                    </table>


                </div>

                <div class="column">
                    <!--                    <h2>Column</h2>-->
                    <img class=poster onclick="setMovieID('RMC')" src="../../media/A_Star_is_Born.png" width="330" height="489" alt="A_Star_is_Born.png" />

                    <table>
                        <tr>
                            <th>A Star is Born (MA)</th>

                        </tr>
                        <tr>
                            <td>Monday - 6 PM</td>
                        </tr>
                        <tr>
                            <td>Tuesday - 6 PM</td>
                        </tr>

                        <tr>
                            <td>Saturday - 3 PM</td>
                        </tr>
                        <tr>
                            <td>Sunday - 3 PM</td>
                        </tr>

                    </table>


                </div>

                <div class="column">
                    <!--                    <h2>Column</h2>-->
                    <img class=poster onclick="setMovieID('ANM')" src="../../media/Ralph_Breaks_the_Internet_(2018_film_poster).png" width="330" height="489" alt="Ralph_Breaks_the_Internet" />

                    <table>
                        <tr>
                            <th>Ralph Breaks the Internet (PG)</th>

                        </tr>
                        <tr>
                            <td>Monday - 12 PM</td>
                        </tr>
                        <tr>
                            <td>Tuesday - 12 PM</td>
                        </tr>
                        <tr>
                            <td>Wednesday - 6 PM</td>
                        </tr>
                        <tr>
                            <td>Thursday - 6 PM</td>
                        </tr>
                        <tr>
                            <td>Friday - 6 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday - 12 PM</td>
                        </tr>
                        <tr>
                            <td>Sunday - 12 PM</td>
                        </tr>

                    </table>


                </div>

                <div class="column">
                    <!--                    <h2>Column</h2>-->
                    <img class=poster onclick="setMovieID('AHF')" src="../../media/Boy_Erased_(2018_poster).png" width="330" height="489" alt="Boy_Erased" />

                    <table>
                        <tr>
                            <th>Boy Erased (PG)</th>

                        </tr>
                        <tr>
                            <td>Wednesday - 12 PM</td>
                        </tr>
                        <tr>
                            <td>Thurday - 12 PM</td>
                        </tr>
                        <tr>
                            <td>Friday - 12 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday - 9 PM</td>
                        </tr>
                        <tr>
                            <td>Sunday - 9 PM</td>
                        </tr>

                    </table>


                </div>
            </div>
            <hr class="line">


            <div class="flex-container">


                <div id="synop_1">
                    <h3>The Girl in the Spider's Web (G)</h3>
                    <!--                    <h4>Movie Synopsis</h4>-->
                    <p>A new Dragon Tattoo story comes to the screen starring Claire Foy ("The Crown") as Lisbeth Salander, the fierce, outcast vigilante defender from the acclaimed Millennium book series created by Stieg Larsson, in The Girl in the Spider's Web. A first-time adaptation of the recent global bestseller, the film is directed by Fede Alvarez, the director of 2016's breakout thriller Don't Breathe; the screenplay adaptation is by Jay Basu &amp; Fede Alvarez and Steven Knight.
                        <p>DIRECTED BY Fede Alvarez </p>
                        <p>SCREENPLAY BY Jay Basu &amp; Fede Alvarez and Steven Knight </p>
                        <p>PRODUCED BY Scott Rudin, Eli Bush, Ole Søndberg, Søren Stærmose, Berna Levin, Amy Pascal, Elizabeth Cantillon
                            EXECUTIVE PRODUCERS Arnon Milchan, Robert J. Dohrmann, David Fincher, Line Winther Skyum Funch, Johannes Jensen, Anni Faurbye Fernandez</p>
                        <p>CAST
                            Claire Foy, Sverrir Gudnason, Lakeith Stanfield, Sylvia Hoeks, Stephen Merchant </p>
                        <p>Running Time - 155 mins</p>
                        <p>Rated - MA (Mature Audiences)</p>
                </div>

                <div id="trailer_detail_1">

                    <!-- the iframe information was taken from YouTube -->
                    <!--                    <span id="trailer_detail">-->

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/XKMSP9OKspQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <!--                        </span>-->


                </div>

                <div id="synop_2">
                    <h3>Boy Erased(G)</h3>
                    <!--                    <h4>Movie Synopsis</h4>-->
                    <p>A new Dragon Tattoo story comes to the screen starring Claire Foy ("The Crown") as Lisbeth Salander, the fierce, outcast vigilante defender from the acclaimed Millennium book series created by Stieg Larsson, in The Girl in the Spider's Web. A first-time adaptation of the recent global bestseller, the film is directed by Fede Alvarez, the director of 2016's breakout thriller Don't Breathe; the screenplay adaptation is by Jay Basu &amp; Fede Alvarez and Steven Knight.
                        <p>DIRECTED BY Fede Alvarez </p>
                        <p>SCREENPLAY BY Jay Basu &amp; Fede Alvarez and Steven Knight </p>
                        <p>PRODUCED BY Scott Rudin, Eli Bush, Ole Søndberg, Søren Stærmose, Berna Levin, Amy Pascal, Elizabeth Cantillon
                            EXECUTIVE PRODUCERS Arnon Milchan, Robert J. Dohrmann, David Fincher, Line Winther Skyum Funch, Johannes Jensen, Anni Faurbye Fernandez</p>
                        <p>CAST
                            Claire Foy, Sverrir Gudnason, Lakeith Stanfield, Sylvia Hoeks, Stephen Merchant </p>
                        <p>Running Time - 155 mins</p>
                        <p>Rated - MA (Mature Audiences)</p>
                </div>

                <div id="trailer_detail_2">

                    <!-- the iframe information was taken from YouTube -->
                    <!--                    <span id="trailer_detail">-->

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/XKMSP9OKspQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <!--                        </span>-->


                </div>



            </div>

            <div id="book_buttons_1">
                <h3>Make a Booking:</h3>
                <button id="booking_button1" onclick="upateMovieDayTime('WED', '9')" type="button" class="button" value="Input Button">Wed : 9PM</button>
                <button id="booking_button2" onclick="upateMovieDayTime('THU', '9')" type="button" class="button" value="Input Button">Thu : 9PM</button>
                <button id="booking_button3" onclick="upateMovieDayTime('FRI', '9')" type="button" class="button" value="Input Button">Fri : 9PM</button>
                <button id="booking_button4" onclick="upateMovieDayTime('SAT', '6')" type="button" class="button" value="Input Button">Sat : 6PM</button>
                <button id="booking_button5" onclick="upateMovieDayTime('SUN', '6')" type="button" class="button" value="Input Button">Sun : 6PM</button>
            </div>

            <div id="book_buttons_2">
                <h3>Make a Booking:</h3>
                <button id="booking_button1" onclick="upateMovieDayTime('WED', '1111')" type="button" class="button" value="Input Button">Wed : 9PM</button>
                <button id="booking_button2" onclick="upateMovieDayTime('THU', '9')" type="button" class="button" value="Input Button">Thu : 9PM</button>
                <button id="booking_button3" onclick="upateMovieDayTime('FRI', '9')" type="button" class="button" value="Input Button">Fri : 9PM</button>
                <button id="booking_button4" onclick="upateMovieDayTime('SAT', '6')" type="button" class="button" value="Input Button">Sat : 6PM</button>
                <button id="booking_button5" onclick="upateMovieDayTime('SUN', '6')" type="button" class="button" value="Input Button">Sun : 6PM</button>
            </div>





        </article>
        <article id="booking" class="ib">
            <h2>Booking</h2>
            <hr class="line">


            <form name="myForm" onsubmit="logForm()" action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" method="POST" target="_blank">
                <div>

                    <!--
                    <input id="hidden_mov_id" type="hidden" name="movie[id]" value="ACT" />
                    <input id="hidden_day" type="hidden" name="movie[day]" value="MON" />
                    <input id="hidden_time" type="hidden" name="movie[hour]" value=12>
-->
                    <script>getMovieTitle()</script>

                    <input id="hidden_mov_id" type="hidden" name="movie[id]" />
                    <input id="hidden_day" type="hidden" name="movie[day]" />
                    <input id="hidden_time" type="hidden" name="movie[hour]" />
                    <fieldset>
                        <h3>The Girl in the Spider's Web (G) - Saturday 6 PM</h3>
                        <fieldset>
                            <legend>Standard</legend>
                            <label id="standard_adult" for="standard adult">Standard Adult</label>
                            <select name="seats[STA]" id="seats[STA]" onchange="testOnChange()">
                                <option value="">Please Select</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                                <option value=7>7</option>
                                <option value=8>8</option>
                                <option value=9>9</option>
                                <option value=10>10</option>
                            </select>
                            <br />
                            <label id="standard_concession" for="standard concession">Standard Concession</label>
                            <select name="seats[STP]" id=seats[STP]>
                                <option value="">Please Select</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                                <option value=7>7</option>
                                <option value=8>8</option>
                                <option value=9>9</option>
                                <option value=10>10</option>
                            </select>
                            <br />
                            <label id="standard_child" for="standard child">Standard Child</label>
                            <select name="seats[STC]" id="seats[STC]">
                                <option value="">Please Select</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                                <option value=7>7</option>
                                <option value=8>8</option>
                                <option value=9>9</option>
                                <option value=10>10</option>
                            </select>
                        </fieldset>
                        <br />
                        <fieldset>
                            <legend>First Class</legend>
                            <label id="first_class_adult" for="first class adult">First Class Adult</label>
                            <select name="seats[FCA]" id="seats[FCA]">
                                <option value="">Please Select</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                                <option value=7>7</option>
                                <option value=8>8</option>
                                <option value=9>9</option>
                                <option value=10>10</option>
                            </select>
                            <br />
                            <label id="first_class_concession" for="first class concession">First Class Concession</label>
                            <select name="seats[FCP]" id="seats[FCP]">
                                <option value="">Please Select</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                                <option value=7>7</option>
                                <option value=8>8</option>
                                <option value=9>9</option>
                                <option value=10>10</option>
                            </select>
                            <br />


                            <label id="first_class_child" for="first class child">First Class Child</label>
                            <select name="seats[FCC]" id="seats[FCC]" onchange="myFunction()">
                                <option value="">Please Selxect</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                                <option value=7>7</option>
                                <option value=8>8</option>
                                <option value=9>9</option>
                                <option value=10>10</option>
                            </select>
                            <!--                            <p id="demo12"></p>-->
                        </fieldset>
                        <br />


                        <fieldset>
                            <label id="name" for="name">Name</label>
                            <input id="input_name" type="text" name="cust[name]" onblur="fieldValueOutput('input_name')" maxlength="20" />
                            <br />
                            <label id="email" for="email">Email</label>
                            <input id="input_email" type="email" name="cust[email]" maxlength="200" onblur="fieldValueOutput('input_email')" />
                            <br />
                            <label id="mobile" for="mobile">Mobile</label>
                            <input id="input_mobile" type="input_tel" name="cust[mobile]" maxlength="20" onblur="fieldValueOutput('input_mobile')" />
                            <br />
                            <label id="cc" for="credit card">Credit Card</label>
                            <input id="input_cc" type="text" name="cust[card]" maxlength="19" onblur="fieldValueOutput('input_cc')" />
                            <br />
                            <label id="expiry" for="expiry date">Expiry Date</label>
                            <input id="input_month" type="month" name="cust[expiry]" onblur="fieldValueOutput('input_month')" />
                        </fieldset>
                        <br />
                        <fieldset>
                            <label id="total" for="total">Total $</label>
                            <input id="output_total" type="text" name="total" maxlength="7" onblur="fieldValueOutput('output_total')" />
                            <button id="submit" type="submit" name="order" class="button" value="Submit">Order</button>
                        </fieldset>
                    </fieldset>

                    <!--
                    <p>Select a new car from the list.</p>

                    <select id="mySelect" onchange="myFunction()">
                        <option value="Audi">Audi
                        <option value="BMW">BMW
                        <option value="Mercedes">Mercedes
                        <option value="Volvo">Volvo
                    </select>

                    <p>When you select a new car, a function is triggered which outputs the value of the selected car.</p>

                    <p id="demo"></p>
-->

                </div>

            </form>



        </article>


    </main>


    <footer id="footer">
        <div>&copy;<script>
                document.write(new Date().getFullYear());

            </script>
            <!--            <button type="button" onclick="myFunction()">Try it</button>-->




            <div>Philip Beeby (s3666628), Last modified: 06/01/2019
                <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
        </div>
        <br />
        <div id="logo"><img src="../../media/lunardo_logo3.png" alt="lunardo logo" height="60" width="100"> </div>


        <div id="disclaimer">Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>

    </footer>

    <?php
print_footer();
?>
    <hr class="line">

    <div>
        <h4>Debug Console</h4>
        <p id="debug_out"></p>
        <?php 
        echo "My first PHP script!";
        preShow($_POST); // ie echo a string
        preShow($_SESSION);

        $aaarg = preShow($my_bad_array, true); // ie return as a string
        echo "Why is \n $aaarg \n not working?";
        printMyCode();

        ?>

    </div>

</body>

</html>
