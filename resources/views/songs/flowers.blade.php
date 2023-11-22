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
        {{$song=1}}
        {{$link="https://www.youtube.com/watch?v=iawgB2CDCrw"}}
    </div>
    <body>

        <div class="container">
            <div class="main-content">
                <!-- Your main content goes here -->
                <h1>Flowers- Miley Cyrus</h1>
                <div class="pre  inline" style="height: 669px; font-size: 14px; line-height: 46.2px;">
                    <div class="pre  inline" style="height: 716px; font-size: 18px; line-height: 49.5px;">
                    <div class="song-lyric-note">
                        <div class="chord_lyric_line text_only">Tone D: Capo 2</div>
                    </div>
                    <div id="song-lyric" class=""><div class="lyric-page-divider">Page 1<span class="total-page"> / 2</span></div>
            <div class="pre  inline" style="height: 700px; font-size: 20px; line-height: 39.6px;">
            <div class="song-lyric-note"><div class="chord_lyric_line"><span class="hopamchuan_lyric">Tone: </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span></div></div><div class="chord_lyric_line text_only">Verse 1</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">We were </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">good, we were </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">gold</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Kind of </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">dream that can't be </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">sold</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">We were </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">right 'til we </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">weren't</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Built a </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">home and watched it </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">burn</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Pre-Chorus</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Mmm, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">I didn't wanna leave you, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">I didn't wanna lie</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric falling_chars_before">S</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">E7</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">S</span><span class="hopamchuan_lyric">tarted to cry but then remembered, I</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Chorus</div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">I can buy myself </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">flowers</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> Write my name in the </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_before">sand</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C/B</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">sand</span><span class="hopamchuan_lyric">   </span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> Talk to myself for </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">hours</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> See things you don't </span><span class="hopamchuan_lyric falling_chars_before">unders</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">unders</span><span class="hopamchuan_lyric falling_chars_before">tand</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C/B</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">tand</span><span class="hopamchuan_lyric">   </span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> I can take myself </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">dancing</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> And I can hold my own </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_before">hand</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C/B</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">hand</span><span class="hopamchuan_lyric">   </span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Yeah, I can </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">love me better </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">E7</span><i>]</i></span><span class="hopamchuan_lyric">than you </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">can</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Post-Chorus</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Can love me better, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">I can love me better, baby</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> Can love me better, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">I can love me </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C/B</span><i>]</i></span><span class="hopamchuan_lyric">better, baby</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Verse 2</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Paint my </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">nails, cherry </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">red</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Match the </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric">roses that you </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_before">left</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Cmaj7</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">left</span><span class="hopamchuan_lyric">     </span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">No </span><span class="hopamchuan_lyric falling_chars_before">re</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">re</span><span class="hopamchuan_lyric">morse, no </span><span class="hopamchuan_lyric falling_chars_before">re</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">re</span><span class="hopamchuan_lyric">gret</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">I </span><span class="hopamchuan_lyric falling_chars_before">for</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">for</span><span class="hopamchuan_lyric">get every word you </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_before">said</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Cmaj7</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">said</span><span class="hopamchuan_lyric">     </span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Pre-Chorus</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Ooh, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">I didn't wanna leave you, baby, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">I didn't wanna fight</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric falling_chars_before">S</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">E7</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">S</span><span class="hopamchuan_lyric">tarted to cry but then remembered I</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Chorus</div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">I can buy myself </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">flowers</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> Write my name in the </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_before">sand</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C/B</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">sand</span><span class="hopamchuan_lyric">   </span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> Talk to myself for </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">hours</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> See things you don't </span><span class="hopamchuan_lyric falling_chars_before">unders</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">unders</span><span class="hopamchuan_lyric falling_chars_before">tand</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C/B</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">tand</span><span class="hopamchuan_lyric">   </span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> I can take myself </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">dancing, yeah</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> And I can hold my own </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_before">hand</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C/B</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">hand</span><span class="hopamchuan_lyric">   </span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Yeah, I can </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">love me better </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">E7</span><i>]</i></span><span class="hopamchuan_lyric">than you </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">can</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Post-Chorus</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Can love me better, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">I can love me better, baby</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> Can love me better, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">I can love me </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C/B</span><i>]</i></span><span class="hopamchuan_lyric">better, baby</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> Can love me better, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">I can love me better, baby</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> Can love me better, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">I</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Pre-Chorus</div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">I didn't wanna leave you, baby, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">I didn't wanna fight</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric falling_chars_before">S</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">E7</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">S</span><span class="hopamchuan_lyric">tarted to cry but then remembered I</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Chorus</div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">I can buy myself </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">flowers (Uh-uh)</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> Write my name in the </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_before">sand</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C/B</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">sand</span><span class="hopamchuan_lyric">   </span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> Talk to myself for </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">hours (Yeah-eah)</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> See things you don't </span><span class="hopamchuan_lyric falling_chars_before">unders</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">unders</span><span class="hopamchuan_lyric falling_chars_before">tand</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C/B</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">tand</span><span class="hopamchuan_lyric">   </span></div>            </div>
        <div class="lyric-page-divider">Page 2<span class="total-page"> / 2</span></div><div class="pre  inline" style="height: auto; font-size: 12px; line-height: 39.6px;"><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> I can take myself </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">dancing (Yeah-eah)</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> And I can hold my own </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_before">hand</span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C/B</span><i>]</i></span><span class="hopamchuan_lyric falling_chars_after">hand</span><span class="hopamchuan_lyric">   </span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Yeah, I can </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">love me better </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">E7</span><i>]</i></span><span class="hopamchuan_lyric">than</span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Yeah, I can </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">F</span><i>]</i></span><span class="hopamchuan_lyric">love me better </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">E7</span><i>]</i></span><span class="hopamchuan_lyric">than you </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">can</span></div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line empty_line">&nbsp;</div><div class="chord_lyric_line text_only">Outro</div><div class="chord_lyric_line"><span class="hopamchuan_lyric">Can love me better, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">I can love me better, baby</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> Can love me better, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">I </span></div><div class="chord_lyric_line"><span class="hopamchuan_lyric">can</span><span class="hopamchuan_lyric"> love me </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C/B</span><i>]</i></span><span class="hopamchuan_lyric">better, baby (Baby yeah)</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric"> Can love me better, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Dm</span><i>]</i></span><span class="hopamchuan_lyric">I can love me better, baby</span></div><div class="chord_lyric_line"><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">G</span><i>]</i></span><span class="hopamchuan_lyric"> Can love me better, </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C</span><i>]</i></span><span class="hopamchuan_lyric">I   </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">C/B</span><i>]</i></span><span class="hopamchuan_lyric">      </span><span class="hopamchuan_chord_inline"><i>[</i><span class="hopamchuan_chord">Am</span><i>]</i></span><span class="hopamchuan_lyric">  </span></div></div></div>
                </div>
            </div>
            <div class="fixed-section rounded-section">
                <!-- Album Cover -->
                <img class="album-cover" src="images/8249743.jpg" alt="Album Cover">

                <!-- Media Player (Simplified for Mobile) -->
                <audio class="media-player" controls>
                    <source src="{{ asset('audio/flowers.mp3')}}" type="audio/mpeg">
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
