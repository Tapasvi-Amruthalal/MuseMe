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

        h1{
            font-size:40px;
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
        .song-lyric{
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
            margin: 5px 5px;
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
            .song-lyric{
                margin-bottom:15vh;
            }
            .fixed-section{
                flex-direction: column;
                width: 80vw;
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
                width:60%;

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
        {{$song=6}}
        {{$link="https://www.youtube.com/watch?v=D9o_XTzYoa8"}}
    </div>
    <body>

        <div class="container">
            <div class="main-content">
                <!-- Your main content goes here -->
                <h1>Eat Your Young - Hozeir</h1>
                <div class="pre  inline" style="height: 669px; font-size: 14px; line-height: 46.2px;">
                    <div class="pre  inline" style="height: 716px; font-size: 18px; line-height: 49.5px;">
                    <div class="song-lyric-note">
                        <div class="chord_lyric_line text_only">Tone D: Capo 2</div>
                    </div>
                    <div id="song-lyric" class="">
                        <div class="pre  inline" style="height: 716px; font-size: 20px; line-height: 42.9px;">
                        <div class="song-lyric-note"><div class="chord_lyric_line text_only">Intro</div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">  (Yeah, yeah, yeah, yeah)</span></div></div><div class="chord_lyric_line text_only">Verse 1</div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">Fever dream high </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">D</span><i>]</i></span><span class="hopamchuan_lyric">in the quiet of the night</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">You </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">know that I caught it </span><span class="hopamchuan_lyric falling_chars_before">(oh</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">(oh</span><span class="hopamchuan_lyric"> yeah, you’re right, I want it)</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">Bad, bad boy, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">D</span><i>]</i></span><span class="hopamchuan_lyric">shiny toy with a price</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">You </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">know that I bought it </span><span class="hopamchuan_lyric falling_chars_before">(oh</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">(oh</span><span class="hopamchuan_lyric"> yeah, you’re right, I want it)</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Pre-Chorus 1</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Killing me </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">slow, out the </span><span class="hopamchuan_lyric falling_chars_before">win</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">D</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">win</span><span class="hopamchuan_lyric">dow</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">I’m always waiting </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">for you to be waiting </span><span class="hopamchuan_lyric falling_chars_before">b</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">b</span><span class="hopamchuan_lyric">elow</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Devils roll the </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">dice, angels roll their eyes</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">What doesn’t </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">D</span><i>]</i></span><span class="hopamchuan_lyric">kill me makes me want you more</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Chorus 1</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">And it’s </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">new, the shape of your body</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">It’s </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">blue, the feeling I’ve got</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">And it’s </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">ooh-ooh ooh whoa-oh</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">It’s a </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">cruel summer</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">It’s </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">cool, that’s what I tell ’em</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">No </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">rules, unbreakable heaven</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">But </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">ooh-ooh ooh whoa-oh</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">It’s a </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">cruel summer, with </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">you</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Verse 2</div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">Hang your head low </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">D</span><i>]</i></span><span class="hopamchuan_lyric">in the glow of the vending </span><span class="hopamchuan_lyric falling_chars_before">mac</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">mac</span><span class="hopamchuan_lyric">hine</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">I’m not buying (oh </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">yeah, you’re right, I want it)</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">You </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">say that we’ll just </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">D</span><i>]</i></span><span class="hopamchuan_lyric">screw it up in these trying </span><span class="hopamchuan_lyric falling_chars_before">t</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">t</span><span class="hopamchuan_lyric">imes</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">We’re not trying (oh </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">yeah, you’re right, I want it)</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Pre-Chorus 2</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">So cut the </span><span class="hopamchuan_lyric falling_chars_before">head</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">head</span><span class="hopamchuan_lyric">lights, summer’s </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">D</span><i>]</i></span><span class="hopamchuan_lyric">a knife</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">I’m always waiting </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">for you just to cut </span><span class="hopamchuan_lyric falling_chars_before">to</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">to</span><span class="hopamchuan_lyric"> the bone</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Devils roll the </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">dice (dice), angels roll their eyes (eyes)</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">And if I </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">D</span><i>]</i></span><span class="hopamchuan_lyric">bleed, you’ll be the last to know</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Chorus 2</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Oh it’s </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">new, the shape of your body</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">It’s </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">blue, the feeling I’ve got</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">And it’s </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">ooh-ooh ooh whoa-oh</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">It’s a </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">cruel summer</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">It’s </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">cool, that’s what I tell ’em</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">No </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">rules, unbreakable heaven</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">But </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">ooh-ooh ooh whoa-oh</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">It’s a </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">cruel summer, </span><span class="hopamchuan_lyric falling_chars_before">with</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">(G)</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">with</span><span class="hopamchuan_lyric"> you</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Bridge</div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">  I’m drunk in the back of the car</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">And I </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">cried like a baby coming home from the bar (oh)</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">    Said I’m fine, but it wasn’t true</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">I don’t </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">wanna keep secrets just to keep you</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">And </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">I snuck in through the garden gate</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Every </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">night that summer just to seal my fate (oh)</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">    And I screamed for whatever it’s worth</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">“I </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">love you,” ain’t that the worst thing you ever </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">N.C.</span><i>]</i></span><span class="hopamchuan_lyric">heard?</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">He looks up, grinning like a devil</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Chorus 3</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">It’s </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">new, the shape of your body</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">It’s </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">blue, the feeling I’ve got</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">And it’s </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">ooh-ooh ooh whoa-oh</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">It’s a </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">cruel summer</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">It’s </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">cool, that’s what I tell ’em</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">No </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">rules, unbreakable heaven</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">But </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">ooh-ooh ooh whoa-oh</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">It’s a </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">cruel summer, </span><span class="hopamchuan_lyric falling_chars_before">with</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">(G)</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">with</span><span class="hopamchuan_lyric"> you</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Outro</div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">  I’m drunk in the back of the car</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">And I </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">cried like a baby coming home from the bar (oh)</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">    Said I’m fine, but it wasn’t true</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">I don’t </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">wanna keep secrets just to keep you</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">And </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">I snuck in through the garden gate</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Every </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Bm</span><i>]</i></span><span class="hopamchuan_lyric">night that summer just to seal my fate (oh)</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Em</span><i>]</i></span><span class="hopamchuan_lyric">    And I screamed for whatever it’s worth</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">“I </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">love you,” ain’t that the worst thing you ever </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">heard?</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">(Yeah, yeah, yeah, yeah)</div>            </div>
                    </div>
                </div>
            </div>
            <div class="fixed-section rounded-section">
                <!-- Album Cover -->
                <img class="album-cover" src="images/8249743.jpg" alt="Album Cover">

                <!-- Media Player (Simplified for Mobile) -->
                <audio class="media-player" controls>
                    <source src="{{ asset('audio/eatyouryoung.mp3')}}" type="audio/mpeg">
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
                    <a href="{{url($link)}}">
                        <button class="button youtube" style=" paddoi"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg> YOUTUBE</button>
                    </a>
                </div>
            </div>
        </div>
    </body>
    @stop
