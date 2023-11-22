@extends('navbar')
@section('content')
    <!DOCTYPE html>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff;
            /* Set the background color for the body */
            color: #000;
            /* Set the default text color to white */
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            background-color: #fff
        }

        .main-content {
            flex: 1;
            padding: 20px;
            margin-top: 20px;
            /* Adjusted margin-top for mobile view */
            background-color: #fff;
            height: 100vh;
        }

        .fixed-section {
            width: 40%;
            /* bottom: 0; */
            /* Changed top to bottom */
            right: 2vw;
            background-color: darkslategray;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            height: 70vh;
            width: 30vw;
            position: fixed;
            top: 20vh;
        }
        .lyrics{
            padding:2rem;
            
        }
        .rounded-section {
            border-radius: 20px;
        }

        .album-cover {
            max-width: auto;
            max-height: auto;
            width: 50%;
            border-radius: 10px;
        }

        .media-player {
            width: 70%;
            margin-top: 20px;
            border-radius: 20px
        }

        .player-buttons {
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 10px;
            align-content: center;
            
        }

        .button {
            margin: 10px 10px;
            padding: 10px;
            background-color: fff;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius:1005px;
        }
        a.like{
            padding: 8px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none
        }
        .like-container{
            margin-top:10px;
        }
        .additional-content {
            margin-top: 20px;
        }

        .hopamchuan_chord {
            color: red;
            /* font-size: x-large; */
        }
        .value-setter{
            display: none;
        }
    .youtube{
            border-radius:10px;
            color:black;
            pa
            }
        @media (max-width: 768px) {
            .container {
                /* Adjusted flex-direction */
            }
            .lyrics{
                margin-bottom:15vh;
            }
            .fixed-section{
                flex-direction: column;
                width: 70vw;
                /* bottom: 0; */
                height: 100px;
                position: fixed;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
                border-top-right-radius: 20px;
                border-bottom-right-radius: 20px;
                
                /* margin-top: 20px; */
                top:85vh;
                bottom:0px;
                /* Adjusted margin-top */
            }
            .rounded-section{
                border-radius:80px;
            }
            .media-player {
                margin: 30px;
                margin-top: 35px;
            }

            .album-cover {
                display: none;
            }

            .player-buttons {
                margin-top: 5px;
                flex-direction: row;
            }
            
            .like{
              position:absolute;
              left:1.7em;
              bottom:2em; 
    
            }
            .youtube{
                position:absolute;
              right:1.7em;
              bottom:2em; 
            }
        }
    </style>
     
    </head>
    <div class="value-setter">
        {{$song=2}}
    </div>
    <body>

        <div class="container">
            <div class="main-content">
                <!-- Your main content goes here -->
                <h1>Main Content</h1>
                <div class="pre  inline" style="height: 669px; font-size: 14px; line-height: 46.2px;">
                    <div class="pre  inline" style="height: 716px; font-size: 15px; line-height: 49.5px;">
                    <div class="song-lyric-note">
                        <div class="chord_lyric_line text_only">Tone D: Capo 2</div>
                    </div>
                    <div class="lyrics">

                        <div class="chord_lyric_line empty_line">&nbsp;</div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">1. </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> I'm so
                                glad you made time to see me.</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> How's
                                life? Tell me how's
                                your family?</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> I
                                haven't seen them in a
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> while
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> </span>
                        </div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> You've
                                been good, busier
                                than ever,</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> We
                                small talk, work and the
                                weather,</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> Your
                                guard is up and I know
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> why
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> Because
                                the last time
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> you saw
                                me</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Is still </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> burned
                                in the back of your </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                mind.</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">You gave me </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> roses
                                and I </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> left
                                them there to
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                die</span></div>
                        <div class="chord_lyric_line empty_line">&nbsp;</div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Chorus: So </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> this is
                                me swallowing my pride</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Standing in </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric"> front
                                of you saying "I'm sorry for that </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                night"</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">And I go </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> back to
                                December </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> all the
                                time.</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">It </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> turns
                                out freedom ain't nothing but missing you</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">
                                Wishing I'd realized what I
                                had when </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> you
                                were mine</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I'd go </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> back
                                to December, </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> turn
                                around and make it all
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                right</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I go </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> back
                                to December </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> all
                                the time</span></div>
                        <div class="chord_lyric_line empty_line">&nbsp;</div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">2. </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> These
                                days I haven't been sleeping,</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">
                                Staying up, playing back
                                myself leavin'.</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> When
                                your birthday passed
                                and I didn't </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> call
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">And I </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> think
                                about summer, all the beautiful times,</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> I
                                watched you laughing from
                                the passenger side.</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                Realized that I loved you in
                                the </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> fall
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> And
                                then the cold came,
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> the
                                dark days </span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">When </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> fear
                                crept into my </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                mind</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">You gave me </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> all
                                your love and all I </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> gave
                                you was </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                "Goodbye"</span></div>
                        <div class="chord_lyric_line empty_line">&nbsp;</div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Chorus: So </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> this
                                is me swallowing my pride</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Standing in </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric"> front
                                of you saying "I'm sorry for that </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                night"</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">And I go </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> back
                                to December </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> all
                                the time.</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">It </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> turns
                                out freedom ain't nothing but missing you</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">
                                Wishing I'd realized what I
                                had when </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> you
                                were mine</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I'd go </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> back
                                to December, </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> turn
                                around and change my
                                own </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                mind</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I go </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> back
                                to December </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> all
                                the time</span></div>
                        <div class="chord_lyric_line empty_line">&nbsp;</div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">* I miss your </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">
                                tanned skin, your </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> sweet
                                smile, so </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> good
                                to me, so </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">
                                right</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">And how you </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> held
                                me in your </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> arms
                                that September
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> night
                            </span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">The first time you </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> ever
                                saw me </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">
                                cry</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Maybe this is wishful thinking
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                probably mindless dreaming </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">But if we loved again, I swear I'd
                                love you </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">
                                right</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I'd go </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> back
                                in time and </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> change
                                it but I </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                can't.</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">So if the </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> chain
                                is on your </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> door I
                                unders-</span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                tand.</span></div>
                        <div class="chord_lyric_line empty_line">&nbsp;</div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Chorus: But </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> this
                                is me swallowing my pride</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">Standing in </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric"> front
                                of you saying "I'm sorry for that </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                night"</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">And I go </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> back
                                to December </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">
                            </span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">It </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> turns
                                out freedom ain't nothing but missing you,</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">
                                Wishing I'd realized what I
                                had when </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> you
                                were mine.</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I'd go </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> back
                                to December, </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> turn
                                around and make it all
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">
                                right.</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">I'd go </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> back
                                to December, </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> turn
                                around and change my
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> own
                                mind</span></div>
                        <div class="chord_lyric_line empty_line">&nbsp;</div>
                        <div class="chord_lyric_line"><span class="hopamchuan_lyric">* I go </span><span
                                class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> back
                                to December </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> all
                                the time.</span></div>
                        <div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric"> All
                                the </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric"> time
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">
                            </span><span class="hopamchuan_chord_inline"><i>[</i><span
                                    class="hopamchuan_chord">F</span><i>]</i></span></div>
                    </div>
                </div>
            </div>
            <div class="fixed-section rounded-section">
                <!-- Album Cover -->
                <img class="album-cover" src="images/8249743.jpg" alt="Album Cover">

                <!-- Media Player (Simplified for Mobile) -->
                <audio class="media-player" controls>
                    <source src="{{ asset('audio/backtodecember.mp3')}}" type="audio/mpeg">
                    {{-- <source src="/audio/back-to-december/mp3" type="audio/mp3"> --}}
                    Your browser does not support the audio tag.
                </audio>
                {{-- <div class="controls">
                    <div> <i class="fa-solid fa-backward"></i></div>
                    <div onclick="playPause()"> <i class="fa-solid fa-play" id="ctrlIcon"></i></div>
                    <div><i class="fa-solid fa-forward"></i> </div>
                </div> --}}
                {{-- <audio controls>
                    <source src="{{ route('tracks.player.show', array('slug' => $track->attachment->slug)) }}" type="audio/mpeg">
                </audio> --}}
                <!-- Play Button (Simplified for Mobile) -->
                <div class="player-buttons">
                    @include('components.like')
                    
                    <button class="button youtube" style=" paddoi"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg> YOUTUBE</button>
                </div>
            </div>
        </div>
        <script>
            let progress = document.getElementById("progress");
            let song = document.getElementById("song");
            let ctrlIcon = document.getElementById("ctrlIcon");
            song.onloadedmetadata=function(){
                progress.max=song.duration;
                progress.value=song.currentTime;
            }
            function playPause(){
                if(ctrIcon.classList.contains("fa-pause")){
                    song.pause();
                    ctrlIcon.classList.remove("fa-pause");
                    ctrlIcon.classList.add("fa-play");
        
                }
                else{
                    song.play();
                    ctrlIcon.classList.add("fa-pause");
                    ctrlIcon.classList.remove("fa-play");
                }
            }
            if(song.play()){
                setInterval(()=>{
                    progress.value=song.currentTime;
                },500);
            }
            progress.onchange = function(){
                song.play();
                song.currentTime = progress.value;
                ctrlIcon.classList.add("fa-pause");
                    ctrlIcon.classList.remove("fa-play");
        
            }
            </script>
    </body>
    @stop
