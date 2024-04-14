<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.cdnfonts.com/css/prominder');
        h1,h3,p{
            font-family: 'PROMINDER' , sans-serif;
        }
        body{
            background-color: 	#ffba42;
        }
        .caixa{
            width:800px;
        }
        .dark-blue{
            color: #013c58;
        }
        h1{
            font-size: 60px;
        }
        .form-control{
            border-radius: 0;
        }
        .form-control:focus{
            box-shadow: none !important;
            border-color: #dee2e6;
        }
        .btn{
            border-radius: 0;
            font-family: 'PROMINDER' , sans-serif;
        }
        label{
            color: gray;
        }
                
        :root {
            --rating-size: 10rem;
            --bar-size: 1rem;
            --background-color: #f8f9fa;
            --rating-color-default: #2980b9;
            --rating-color-background: #c7e1f3;
            --rating-color-good: #27ae60;
            --rating-color-meh: #f1c40f;
            --rating-color-bad: #e74c3c;
        }

        /* Rating item */
        .rating {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 100%;
            overflow: hidden;
            
            background: var(--rating-color-default);
            color: var(--rating-color-default);
            width: var(--rating-size);
            height: var(--rating-size);

            
            font-size: calc(var(--rating-size) / 3);
            line-height: 1;
        }

        /* Rating circle content */
        .rating span {
            position: relative;
            display: flex;
            font-weight: bold;
            z-index: 2;
        }

        .rating span small {
            font-size: 0.5em;
            font-weight: 900;
            align-self: center;
        }

        /* Bar mask, creates an inner circle with the same color as thee background */
        .rating::after {
            content: "";
            position: absolute;
            inset: var(--bar-size);
            background: var(--background-color);
            border-radius: inherit;
            z-index: 1;
        }

        /* Bar background */
        .rating::before {
            content: "";
            position: absolute;
            inset: var(--bar-size);
            border-radius: inherit;
            box-shadow: 0 0 0 1rem var(--rating-color-background);
            z-index: -1;
        }

        /* Classes to give different colors to ratings, based on their score */
        .rating.good {
            background: var(--rating-color-good);
            color: var(--rating-color-good);
        }

        .rating.meh {
            background: var(--rating-color-meh);
            color: var(--rating-color-meh);
        }

        .rating.bad {
            background: var(--rating-color-bad);
            color: var(--rating-color-bad);
        }
    
    </style>
    <?php
    session_start();
    ?>