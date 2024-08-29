<?php include "connect.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharatika Creative Design Festival 2024 | KREAKTOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php include "assets/link.html" ?>
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/punggawa.css">
</head>
<style>
    @font-face {
        font-family: "Dagsen Black";
        src: url(assets/font/Dagsen_Black.otf);
    }

    @font-face {
        font-family: "Worksans SemiBold";
        src: url(assets/font/WorkSans-SemiBold.ttf);
    }

    @keyframes float1 {

        0%,
        100% {
            transform: translate(-15px, 0);
        }

        50% {
            transform: translate(-15px, -5px);
        }
    }

    @keyframes slide {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    @media screen and (min-width: 768px) {
        .compe-mobile {
            display: none;
        }

        .compe-desktop {
            display: contents;
        }

        body {
            background-color: var(--black);
        }

        .containers {
            overflow-x: hidden;
            margin-top: 42.5px;
            height: calc(100% - 42.5px);
        }

        row {
            gap: 0;
        }

        .w-101 {
            width: 100%;
            gap: 0;
        }

        .col-md-3 {
            padding: 0;
        }

        .tirtaGanteng-d {
            background-color: #1771B9;
            overflow-x: hidden;
            overflow-y: hidden;
            position: relative;
            height: calc(100% - 55px);
            cursor: pointer;
        }

        .agniAyu-d {
            background-color: #A62B2E;
            overflow-x: hidden;
            overflow-y: hidden;
            position: relative;
            height: calc(100% - 55px);
            cursor: pointer;
        }

        .bayuGanteng-d {
            background-color: #E09B26;
            overflow-x: hidden;
            overflow-y: hidden;
            position: relative;
            height: calc(100% - 55px);
            cursor: pointer;
        }

        .buanaAyu-d {
            background-color: #697D35;
            overflow-x: hidden;
            overflow-y: hidden;
            position: relative;
            height: calc(100% - 55px);
            cursor: pointer;
        }

        .vignette-effect-front {
            z-index: 3;
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.8) 100%);
            transition: background 0.5s ease-out;
            -webkit-transition: all 2s ease-out;
            -moz-transition: all 2s ease-out;
            -o-transition: all 2s ease-out;
        }

        .vignette-effect-front:hover {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.4) 100%);
            transition: background 0.5s ease-out;
            -webkit-transition: all 2s ease-out;
            -moz-transition: all 2s ease-out;
            -o-transition: all 2s ease-out;
        }

        .img-competition {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .vignette-effect-back {
            z-index: 1;
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 20%, rgba(0, 0, 0, 1) 100%);
        }

        .nama {
            font-family: "Dagsen Black";
            color: var(--cream);
            position: absolute;
            bottom: 60px;
            left: 50%;
            transform: translate(-50%, 0);
            font-size: 3vw;
        }

        .kategori {
            font-family: "Worksans SemiBold";
            color: var(--cream);
            font-size: 1.2vw;
            left: 50%;
            transform: translate(-50%, 0);
            bottom: 45px;
            position: absolute;
            z-index: 10;
        }

        .segitiga {
            left: 50%;
            transform: translate(-50%, 0);
            bottom: 25px;
            position: absolute;
            z-index: 10;
            animation: float1 3s ease-in-out infinite;
        }

        .container-parent {
            display: flex;
            justify-content: center;
        }

        /* TIRTA CONTAINER */
        .container-tirta-d {
            position: relative;
            display: none;
            width: 80vw;
            justify-content: center;
            flex-direction: column;
        }

        .header-tirta {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 80vw;
        }

        .title-tirta {
            font-family: "Dagsen Black";
            color: #1771B9;
            text-align: center;
            font-size: 18vw;
            margin-top: 10vh;
            margin-bottom: -20px;
            background: linear-gradient(147deg, #1771B9 38.03%, rgba(23, 113, 185, 0.00) 103.95%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .span-tirta {
            margin: 0;
            background: linear-gradient(147deg, #1771B9 38.03%, rgba(23, 113, 185, 0.00) 103.95%);
            background-clip: text;
            border-bottom: 1px solid var(--cream);
        }

        .sub-header {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .sub-header-left {
            font-family: "Worksans SemiBold";
            color: var(--cream);
            font-weight: light;

        }

        .sub-header-right font2 {
            color: var(--cream);
        }

        /* POLICE LINE */
        .police-line-tirta {
            margin-top: 50px;
            overflow: hidden;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-bottom: 150px;
        }

        .slider-track-tirta {
            animation: 15s slide infinite linear;
            gap: 10vw;
            display: flex;
        }

        .slider-track-tirta .icon-sneakers-5 {
            margin-right: 10vw;
        }

        .icon-sneakers {
            position: relative;
        }

        .lingkaran svg {
            margin-top: 20px;
            width: 250px;
            height: 250px;
        }

        .kotak-tirta {
            margin-top: 50px;
            width: 200px;
            height: 200px;
            transform: rotate(45deg);
            background: var(--blue-gradient, linear-gradient(180deg, #1771B9 25.41%, #1771B9 25.41%, rgba(23, 113, 185, 0.00) 100%));
        }

        .kotak-tirta2 {
            margin-top: 80px;
            width: 200px;
            height: 200px;
            transform: rotate(45deg);
            background: var(--blue-gradient, linear-gradient(180deg, #1771B9 25.41%, #1771B9 25.41%, rgba(23, 113, 185, 0.00) 100%));
        }

        .sneakers-painting {
            position: absolute;
            width: 180px;
            top: 0;
            left: 35px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .digital-campaign {
            position: absolute;
            width: 250px;
            left: -10px;
            top: 30px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .digital-campaign-2 {
            top: -20px;
        }

        .fashion-design {
            position: absolute;
            width: 230px;
            top: 0;
            left: 0px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .photography {
            position: absolute;
            width: 300px;
            top: 0;
            left: -3px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .video-commercial {
            position: absolute;
            width: 300px;
            top: 0;
            left: -3px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .details-tirta-sneakers {
            color: var(--cream);
            display: flex;
            justify-content: center;
            margin: 50px 120px 50px 120px;
        }

        .text-details {
            width: 60vw;
        }

        .text-details-content {
            width: 500px;
            font-size: 15px;
            margin-bottom: 20px;
        }

        .img-details {
            margin: 0 120px 0 120px;
        }

        /* BUTTON */
        .btn-brief {
            color: #781442;
            font-weight: bolder;
            border-radius: 100px;
            background: var(--cream, #FAF6E6);
            box-shadow: 0px 0px 5px 0px rgba(120, 20, 66, 0.30);
            padding: 10px 25px;
            margin-right: 20px;
        }

        .btn-brief:hover {
            background: linear-gradient(to right, #781442, #a4ce39) border-box;
            background-size: 100%;
            color: var(--cream);
        }

        .btn-submit {
            color: var(--cream);
            font-weight: bolder;
            border-radius: 100px;
            background: #000;
            background: linear-gradient(to right, #781442, #a4ce39) border-box;
            background-size: 100%;
            box-shadow: 0px 0px 5px 0px rgba(120, 20, 66, 0.30);
            padding: 10px 35px;
        }

        .btn-submit:hover {
            box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 1);
        }


        /* AGNI CONTAINER */
        .container-agni-d {
            position: relative;
            display: none;
            width: 80vw;
            justify-content: center;
            flex-direction: column;
        }

        .header-agni {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 80vw;
        }

        .title-agni {
            font-family: "Dagsen Black";
            color: #A62B2E;
            text-align: center;
            font-size: 22.5vw;
            margin-top: 10vh;
            margin-bottom: -20px;
            background: linear-gradient(147deg, #A62B2E 38.03%, rgba(166, 43, 46, 0.00) 103.95%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .span-agni {
            margin: 0;
            background: linear-gradient(147deg, #1771B9 38.03%, rgba(23, 113, 185, 0.00) 103.95%);
            background-clip: text;
            border-bottom: 1px solid var(--cream);
        }

        .sub-header {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .sub-header-left {
            font-family: "Worksans SemiBold";
            color: var(--cream);
            font-weight: light;

        }

        .sub-header-right font2 {
            color: var(--cream);
        }

        /* POLICE LINE */
        .police-line-agni {
            margin-top: 50px;
            overflow: hidden;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-bottom: 150px;
        }

        .slider-tracks {
            display: flex;
            gap: 10vw;

        }

        .icon-agni {
            position: relative;
        }

        .lingkaran-agni {
            position: relative;
        }

        .lingkaran-agni-2 {
            position: relative;
        }

        .icon-agni svg {
            width: 280px;
            height: 280px;
        }

        .lingkaran-agni svg {
            margin-top: 20px;
            width: 230px;
            height: 230px;
        }

        .lingkaran-agni-2 svg {
            margin-top: 20px;
            width: 230px;
            height: 230px;
        }

        .kotak-agni {
            margin-top: 50px;
            width: 200px;
            height: 200px;
            transform: rotate(45deg);
            background: var(--red-gradient, linear-gradient(180deg, #A62B2E 25.41%, rgba(166, 43, 46, 0.00) 100%));
        }

        .kotak-agni2 {
            margin-top: 100px;
            width: 200px;
            height: 200px;
            transform: rotate(45deg);
            background: var(--red-gradient, linear-gradient(180deg, #A62B2E 25.41%, rgba(166, 43, 46, 0.00) 100%));
        }

        .retail-design {
            position: absolute;
            width: 220px;
            top: 40px;
            left: 35px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .living-room {
            position: absolute;
            width: 250px;
            left: -10px;
            top: 30px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .living-room-2 {
            position: absolute;
            width: 250px;
            left: -10px;
            top: 00px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .work-desk {
            position: absolute;
            width: 280px;
            top: 0;
            left: -20px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .details-agni-sneakers {
            color: var(--cream);
            display: flex;
            justify-content: center;
            margin: 50px 120px 50px 120px;
        }

        /* BAYU CONTAINER */
        .container-bayu-d {
            position: relative;
            display: none;
            width: 80vw;
            justify-content: center;
            flex-direction: column;
        }

        .header-bayu {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 80vw;
        }

        .title-bayu {
            font-family: "Dagsen Black";
            color: #E09B26;
            text-align: center;
            font-size: 20vw;
            margin-top: 10vh;
            margin-bottom: -20px;
            background: linear-gradient(147deg, #E09B26 38.03%, rgba(224, 155, 38, 0.00) 103.95%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .span-bayu {
            margin: 0;
            background: linear-gradient(147deg, #1771B9 38.03%, rgba(23, 113, 185, 0.00) 103.95%);
            background-clip: text;
            border-bottom: 1px solid var(--cream);
        }

        .sub-header {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .sub-header-left {
            font-family: "Worksans SemiBold";
            color: var(--cream);
            font-weight: light;

        }

        .sub-header-right font2 {
            color: var(--cream);
        }

        /* POLICE LINE */
        .police-line-bayu {
            margin-top: 50px;
            overflow: hidden;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-bottom: 150px;
        }

        .slider-tracks {
            display: flex;
            justify-content: center;
        }

        .icon-bayu {
            position: relative;
        }

        .icon-bayu svg {
            width: 280px;
            height: 280px;
        }

        .product-innovation {
            position: absolute;
            width: 150px;
            top: 40px;
            left: 70px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .details-bayu-sneakers {
            color: var(--cream);
            display: flex;
            justify-content: center;
            margin: 50px 120px 50px 120px;
        }


        /* BUANA CONTAINER */
        .container-buana-d {
            position: relative;
            display: none;
            width: 80vw;
            justify-content: center;
            flex-direction: column;
        }

        .header-buana {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 80vw;
        }

        .title-buana {
            font-family: "Dagsen Black";
            color: #697D35;
            text-align: center;
            font-size: 15.5vw;
            margin-top: 10vh;
            margin-bottom: -20px;
            background: linear-gradient(147deg, #697D35 38.03%, rgba(105, 125, 53, 0.00) 103.95%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .span-buana {
            margin: 0;
            background: linear-gradient(147deg, #1771B9 38.03%, rgba(23, 113, 185, 0.00) 103.95%);
            background-clip: text;
            border-bottom: 1px solid var(--cream);
        }

        .sub-header {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .sub-header-left {
            font-family: "Worksans SemiBold";
            color: var(--cream);
            font-weight: light;

        }

        .sub-header-right font2 {
            color: var(--cream);
        }

        /* POLICE LINE */
        .police-line-buana {
            margin-top: 50px;
            overflow: hidden;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-bottom: 150px;
        }

        .slider-track-buana {
            animation: 15s slide infinite linear;
            gap: 10vw;
            display: flex;
        }

        .slider-track-buana .icon-sneakers-5 {
            margin-right: 10vw;
        }

        .icon-sneakers {
            position: relative;
        }

        .icon-sneakers svg {
            width: 280px;
            height: 280px;
        }

        .lingkaran svg {
            margin-top: 20px;
            width: 250px;
            height: 250px;
        }

        .kotak-buana {
            margin-top: 50px;
            width: 200px;
            height: 200px;
            transform: rotate(45deg);
            background: var(--green-gradient, linear-gradient(180deg, #697D35 25.41%, #697D35 25.41%, rgba(105, 125, 53, 0.00) 100%));
        }

        .kotak-buana2 {
            margin-top: 80px;
            width: 200px;
            height: 200px;
            transform: rotate(45deg);
            background: var(--green-gradient, linear-gradient(180deg, #697D35 25.41%, #697D35 25.41%, rgba(105, 125, 53, 0.00) 100%));
        }

        .game-design {
            position: absolute;
            width: 220px;
            top: 20px;
            left: 35px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .fashion-illus {
            position: absolute;
            width: 220px;
            left: -10px;
            top: 30px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .fashion-illus2 {
            position: absolute;
            width: 220px;
            left: -10px;
            top: -20px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .comic-strip {
            position: absolute;
            width: 280px;
            top: 10px;
            left: -20px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .instagram-content {
            position: absolute;
            width: 250px;
            top: -10px;
            left: 20px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .room-styling {
            position: absolute;
            width: 250px;
            top: 0;
            left: 10px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .chinese-story {
            position: absolute;
            width: 250px;
            top: 20px;
            left: 10px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .story-writing {
            position: absolute;
            width: 220px;
            top: 20px;
            left: 10px;
            z-index: 1;
            /* Mengatur z-index agar gambar berada di atas SVG */
        }

        .details-buana-sneakers {
            color: var(--cream);
            display: flex;
            justify-content: center;
            margin: 50px 120px 50px 120px;
        }

        .text-details-header {
            font-size: 3vw;
            margin: 20px 0 20px 0;
        }

        .img-details2 {
            margin: 0 100px;
        }

        .container-agni,
        .container-tirta,
        .container-bayu,
        .container-buana {
            display: none;
        }
    }

    @media screen and (max-width: 1440px) {
        .img-details {
            margin: 0 70px;
        }

        .img-details2 {
            margin: 0 50px;
        }
    }

    @media screen and (max-width: 1024px) {
        .img-details2 {
            margin: 0 30px;
        }

        .btn-brief {
            margin-right: 5px;
        }
    }

    @media screen and (max-width: 992px) {
        .text-details-content {
            width: 38vw;
        }
    }



    @media screen and (max-width: 767px) {
        .compe-mobile {
            display: contents;
        }

        .container-agni-d,
        .container-bayu-d,
        .container-buana-d,
        .container-tirta-d {
            display: none;
        }

        .compe-desktop {
            display: none;
        }

        .conte {
            height: 100svh;
        }

        .punggawa {
            margin-top: 55px;
            height: calc(100% - 55px);
        }

        .punggawa .tirta,
        .punggawa .agni,
        .punggawa .bayu,
        .punggawa .buana {
            height: 25%;
        }

        .punggawa img {
            height: 100%;
        }

        .tirta {
            background-color: #1771B9;
            cursor: pointer;
        }

        .agni {
            background-color: #A62B2E;
            cursor: pointer;
        }

        .bayu {
            background-color: #E09B26;
            cursor: pointer;
        }

        .buana {
            background-color: #697D35;
            cursor: pointer;
        }

        .punggawa p {
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            text-transform: uppercase;
            color: var(--cream);
        }

        .punggawa img {
            position: relative;
        }

        .category {
            bottom: 5vh;
            right: 5vw;
            z-index: 4;
            color: var(--cream);
        }

        .category .title {
            font-size: 10vw;
            color: var(--cream);
        }

        .category .desc {
            font-size: 5vw;
            color: var(--cream);
        }

        .vignette-effect-front {
            z-index: 3;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.15) 0%, rgba(0, 0, 0, 0.9) 100%);
            transition: background 0.5s ease-out;
            -webkit-transition: all 2s ease-out;
            -moz-transition: all 2s ease-out;
            -o-transition: all 2s ease-out;
        }

        .vignette-effect-front:hover {
            background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%);
            transition: background 0.5s ease-out;
            -webkit-transition: all 2s ease-out;
            -moz-transition: all 2s ease-out;
            -o-transition: all 2s ease-out;
        }

        /* BUTTON */
        .btn-brief {
            color: #781442;
            font-weight: bolder;
            border-radius: 100px;
            background: var(--cream, #FAF6E6);
            box-shadow: 0px 0px 5px 0px rgba(120, 20, 66, 0.30);
            padding: 10px 15px;
        }

        .btn-brief:hover {
            background: linear-gradient(to right, #781442, #a4ce39) border-box;
            background-size: 100%;
            color: white;
        }

        .btn-submit {
            color: white;
            font-weight: bolder;
            border-radius: 100px;
            background: #000;
            background: linear-gradient(to right, #781442, #a4ce39) border-box;
            background-size: 100%;
            box-shadow: 0px 0px 5px 0px rgba(120, 20, 66, 0.30);
            padding: 10px 15px;
        }

        .btn-submit:hover {
            box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 1);
        }

        .container-agni,
        .container-tirta,
        .container-bayu,
        .container-buana {
            margin-top: 55px;
            display: none;
            animation: slideFromBottom 0.8s ease;
        }

        .conte {
            animation: slideFromTop 0.8s ease;
        }

        @keyframes slideFromBottom {
            from {
                transform: translateY(100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideFromTop {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    }
</style>

<body>
    <?php include "navbar.php" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var copyBar = document.querySelector(".slider-track-tirta").cloneNode(true);
            document.querySelector(".police-line-tirta").appendChild(copyBar);
        });

        document.addEventListener("DOMContentLoaded", function() {
            var copyBar = document.querySelector(".slider-track-buana").cloneNode(true);
            document.querySelector(".police-line-buana").appendChild(copyBar);
        });

        $(document).ready(function() {
            $('.buanaAyu-d').click(function() {
                $('.container-tirta-d').css('display', 'none');
                $('.container-agni-d').css('display', 'none');
                $('.container-bayu-d').css('display', 'none');
                $('.container-buana-d').css('display', 'flex');
                $('html, body').animate({
                    scrollTop: $("#buana").offset().top
                }, 200);
            });
            $('.bayuGanteng-d').click(function() {
                $('.container-tirta-d').css('display', 'none');
                $('.container-agni-d').css('display', 'none');
                $('.container-bayu-d').css('display', 'flex');
                $('.container-buana-d').css('display', 'none');
                $('html, body').animate({
                    scrollTop: $("#bayu").offset().top
                }, 200);
            });
            $('.agniAyu-d').click(function() {
                $('.container-tirta-d').css('display', 'none');
                $('.container-agni-d').css('display', 'flex');
                $('.container-bayu-d').css('display', 'none');
                $('.container-buana-d').css('display', 'none');
                $('html, body').animate({
                    scrollTop: $("#agni").offset().top
                }, 200);
            });
            $('.tirtaGanteng-d').click(function() {
                $('.container-tirta-d').css('display', 'flex');
                $('.container-agni-d').css('display', 'none');
                $('.container-bayu-d').css('display', 'none');
                $('.container-buana-d').css('display', 'none');
                $('html, body').animate({
                    scrollTop: $("#tirta").offset().top
                }, 200);
            });
        });
    </script>
    <div class="compe-desktop">
        <div class="containers">
            <div class="row">
                <div class="col-md-3 tirtaGanteng-d">
                    <div class="vignette-effect-front flex-column d-flex">
                        <h1 class="nama mx-auto">TIRTA</h1>
                        <h2 class="kategori mx-auto">CATEGORY</h2>
                        <svg class="segitiga" xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 18 7" fill="none">
                            <path d="M9 6.37067L0.339745 0.0926881L17.6603 0.0926894L9 6.37067Z" fill="#FAF6E6" />
                        </svg>
                    </div>
                    <div class="vignette-effect-back"></div>
                    <img src="assets/compe/tirtaGanteng.png" class="w-101 m-0 p-0 img-competition" alt="Image 1">
                </div>
                <div class="col-md-3 agniAyu-d">
                    <div class="vignette-effect-front flex-column d-flex">
                        <h1 class="nama mx-auto">AGNI</h1>
                        <h2 class="kategori mx-auto">CATEGORY</h2>
                        <svg class="segitiga" xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 18 7" fill="none">
                            <path d="M9 6.37067L0.339745 0.0926881L17.6603 0.0926894L9 6.37067Z" fill="#FAF6E6" />
                        </svg>
                    </div>
                    <div class="vignette-effect-back"></div>
                    <img src="assets/compe/agniAyu.png" class="w-101 m-0 p-0 img-competition" alt="Image 2">
                </div>
                <div class="col-md-3 bayuGanteng-d">
                    <div class="vignette-effect-front flex-column d-flex">
                        <h1 class="nama mx-auto">BAYU</h1>
                        <h2 class="kategori mx-auto">CATEGORY</h2>
                        <svg class="segitiga" xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 18 7" fill="none">
                            <path d="M9 6.37067L0.339745 0.0926881L17.6603 0.0926894L9 6.37067Z" fill="#FAF6E6" />
                        </svg>
                    </div>
                    <div class="vignette-effect-back"></div>
                    <img src="assets/compe/bayuGanteng.png" class="w-101 m-0 p-0 img-competition" alt="Image 3">
                </div>
                <div class="col-md-3 buanaAyu-d">
                    <div class="vignette-effect-front flex-column d-flex">
                        <h1 class="nama mx-auto">BUANA</h1>
                        <h2 class="kategori mx-auto">CATEGORY</h2>
                        <svg class="segitiga" xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 18 7" fill="none">
                            <path d="M9 6.37067L0.339745 0.0926881L17.6603 0.0926894L9 6.37067Z" fill="#FAF6E6" />
                        </svg>
                    </div>
                    <div class="vignette-effect-back"></div>
                    <img src="assets/compe/buanaAyu.png" class="w-101 m-0 p-0 img-competition" alt="Image 4">
                </div>
            </div>


            <!-- TIRTA -->
            <div class="container-parent">
                <div class="container-tirta-d" id="tirta">
                    <div class="header-tirta">
                        <div class="span-tirta">
                            <h1 class="title-tirta">TIRTA</h1>
                        </div>
                        <div class="sub-header mt-3">
                            <div class="sub-header-left">
                                <h5>Kategori Lomba</h5>
                                <h3>DKV, DFT, IPDM, Sastra, Ilkom</h3>
                            </div>
                            <div class="sub-header-right font2">
                                <h2>CATEGORY</h2>
                            </div>
                        </div>
                    </div>

                    <!-- POLICE LINE -->
                    <div class="police-line-tirta">
                        <div class="slider-track-tirta">
                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="198" height="198" viewBox="0 0 198 198" fill="none">
                                    <path d="M98.8197 0.0927734L121.879 75.8534L197.639 98.9125L121.879 121.972L98.8197 197.732L75.7606 121.972L0 98.9125L75.7606 75.8534L98.8197 0.0927734Z" fill="url(#paint0_linear_2876_1124)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1124" x1="98.8197" y1="50.3046" x2="98.8197" y2="197.732" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#1771B9" />
                                            <stop offset="0.0001" stop-color="#1771B9" />
                                            <stop offset="1" stop-color="#1771B9" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="sneakers-painting" src="assets/compe/tirta-icon/sneakers-painting.png" alt="">
                            </div>

                            <div class="icon-sneakers">
                                <div class="kotak-tirta"></div>
                                <img class="digital-campaign" src="assets/compe/tirta-icon/digital-campaign.png" alt="">
                            </div>

                            <div class="icon-sneakers lingkaran">
                                <svg xmlns="http://www.w3.org/2000/svg" width="162px" height="162px" viewBox="0 0 162 162" fill="none">
                                    <circle cx="81.3438" cy="80.626" r="80.5723" fill="url(#paint0_linear_2876_1130)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1130" x1="81.3438" y1="40.9937" x2="81.3438" y2="161.198" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#1771B9" />
                                            <stop offset="0.0001" stop-color="#1771B9" />
                                            <stop offset="1" stop-color="#1771B9" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="fashion-design" src="assets/compe/tirta-icon/fashion-design.png" alt="">
                            </div>


                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="189" height="218" viewBox="0 0 189 218" fill="none">
                                    <path d="M94.5 0.330078L188.464 54.5801V163.08L94.5 217.33L0.536247 163.08V54.5801L94.5 0.330078Z" fill="url(#paint0_linear_2876_1369)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1369" x1="94.5" y1="55.4606" x2="94.5" y2="217.33" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#1771B9" />
                                            <stop offset="0.0001" stop-color="#1771B9" />
                                            <stop offset="1" stop-color="#1771B9" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="photography" src="assets/compe/tirta-icon/photography.png" alt="">
                            </div>

                            <div class="icon-sneakers icon-sneakers-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="217" height="218" viewBox="0 0 217 218" fill="none">
                                    <path d="M108.5 0.330078L132.582 50.6903L185.221 32.109L166.64 84.7478L217 108.83L166.64 132.912L185.221 185.551L132.582 166.97L108.5 217.33L84.4177 166.97L31.7789 185.551L50.3603 132.912L0 108.83L50.3603 84.7478L31.7789 32.109L84.4177 50.6903L108.5 0.330078Z" fill="url(#paint0_linear_2876_1377)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1377" x1="108.5" y1="55.4606" x2="108.5" y2="217.33" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#1771B9" />
                                            <stop offset="0.0001" stop-color="#1771B9" />
                                            <stop offset="1" stop-color="#1771B9" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="video-commercial" src="assets/compe/tirta-icon/video-commercial.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="details-tirta-sneakers">
                        <div class="img-details">
                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="198" height="198" viewBox="0 0 198 198" fill="none">
                                    <path d="M98.8197 0.0927734L121.879 75.8534L197.639 98.9125L121.879 121.972L98.8197 197.732L75.7606 121.972L0 98.9125L75.7606 75.8534L98.8197 0.0927734Z" fill="url(#paint0_linear_2876_1124)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1124" x1="98.8197" y1="50.3046" x2="98.8197" y2="197.732" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#1771B9" />
                                            <stop offset="0.0001" stop-color="#1771B9" />
                                            <stop offset="1" stop-color="#1771B9" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="sneakers-painting" src="assets/compe/tirta-icon/sneakers-painting.png" alt="">
                            </div>
                        </div>
                        <div class="text-details">
                            <h1 class="text-details-header font2">SNEAKERS PAINTING</h1>
                            <p class="text-details-content">
                                <b><i>Sneakers Painting</i></b> merupakan lomba dimana peserta akan bekerja sama dalam tim dan melukis pada sepasang sepatu yang disediakan oleh panitia.
                                <br>
                                Peserta akan melukis pada sepasang sepatu sesuai dengan brief dan tema yang telah diberikan oleh panitia.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/10n15KgAmQZ6TayHLOiJ2S-KVtHqKxh1t?usp=drive_link" target="_blank"><button class="btn btn-brief">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                    </div>

                    <div class="details-tirta-sneakers">
                        <div class="text-details">
                            <h1 class="text-details-header font2">DIGITAL CAMPAIGN</h1>
                            <p class="text-details-content">
                                <b><i>Digital Campaign</i></b> merupakan lomba dimana peserta diminta untuk membuat sebuah kampanye digital untuk meningkatkan kesadaran masyarakat mengenai sebuah isu.<br>
                                Peserta membuat kampanye yang mendukung tema dan isu yang telah ditentukan oleh panitia pada brief lomba. Hasil dari karya lomba berupa sebuah kampanye secara digital.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/1Ptv9T7iEiGT-WdWGB5OMDeQC7NH4aZgF?usp=drive_link" target="_blank"><button class="btn btn-brief">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                        <div class="img-details">
                            <div class="icon-sneakers">
                                <div class="kotak-tirta2"></div>
                                <img class="digital-campaign digital-campaign-2" src="assets/compe/tirta-icon/digital-campaign.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="details-tirta-sneakers">
                        <div class="img-details">
                            <div class="icon-sneakers lingkaran">
                                <svg xmlns="http://www.w3.org/2000/svg" width="162px" height="162px" viewBox="0 0 162 162" fill="none">
                                    <circle cx="81.3438" cy="80.626" r="80.5723" fill="url(#paint0_linear_2876_1130)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1130" x1="81.3438" y1="40.9937" x2="81.3438" y2="161.198" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#1771B9" />
                                            <stop offset="0.0001" stop-color="#1771B9" />
                                            <stop offset="1" stop-color="#1771B9" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="fashion-design" src="assets/compe/tirta-icon/fashion-design.png" alt="">
                            </div>
                        </div>
                        <div class="text-details">
                            <h1 class="text-details-header font2">FASHION DESIGN</h1>
                            <p class="text-details-content">
                                <b><i>Fashion Design</i></b> merupakan lomba dimana peserta akan diminta untuk membuat desain dan ilustrasi digital sebuah busana. <br>
                                Peserta akan membuat desain pakaian sesuai dengan tema yang ditentukan pada brief.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/1WMwSavOlyE27ZQd1YZYfw3AnYrfEOZTt?usp=drive_link" target="_blank"><button class="btn btn-brief">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                    </div>


                    <div class="details-tirta-sneakers">
                        <div class="text-details">
                            <h1 class="text-details-header font2">PRODUCT PHOTOGRAPHY</h1>
                            <p class="text-details-content">
                                <b><i>Product Photography</i></b> adalah lomba dimana peserta diminta menghasilkan gambar atau foto dari sebuah produk. <br>
                                Peserta akan membuat karya yang sesuai dengan brief dan produk yang telah ditentukan panitia.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/1492Qf1scmiRQ2yMQS8pzipje2Kf1sYiG?usp=drive_link" target="_blank"><button class="btn btn-brief">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                        <div class="img-details  img-details2">
                            <div class="icon-sneakers">
                                <svg class="photo-svg" xmlns="http://www.w3.org/2000/svg" width="189" height="218" viewBox="0 0 189 218" fill="none">
                                    <path d="M94.5 0.330078L188.464 54.5801V163.08L94.5 217.33L0.536247 163.08V54.5801L94.5 0.330078Z" fill="url(#paint0_linear_2876_1369)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1369" x1="94.5" y1="55.4606" x2="94.5" y2="217.33" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#1771B9" />
                                            <stop offset="0.0001" stop-color="#1771B9" />
                                            <stop offset="1" stop-color="#1771B9" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="photography" src="assets/compe/tirta-icon/photography.png" alt="">
                            </div>
                        </div>
                    </div>


                    <div class="details-tirta-sneakers">
                        <div class="img-details">
                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="217" height="218" viewBox="0 0 217 218" fill="none">
                                    <path d="M108.5 0.330078L132.582 50.6903L185.221 32.109L166.64 84.7478L217 108.83L166.64 132.912L185.221 185.551L132.582 166.97L108.5 217.33L84.4177 166.97L31.7789 185.551L50.3603 132.912L0 108.83L50.3603 84.7478L31.7789 32.109L84.4177 50.6903L108.5 0.330078Z" fill="url(#paint0_linear_2876_1377)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1377" x1="108.5" y1="55.4606" x2="108.5" y2="217.33" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#1771B9" />
                                            <stop offset="0.0001" stop-color="#1771B9" />
                                            <stop offset="1" stop-color="#1771B9" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="video-commercial" src="assets/compe/tirta-icon/video-commercial.png" alt="">
                            </div>
                        </div>
                        <div class="text-details">
                            <h1 class="text-details-header font2">VIDEO COMMERCIAL</h1>
                            <p class="text-details-content">

                                <b><i>Video Commercial</i></b> merupakan lomba dimana peserta diminta membuat iklan video layanan masyarakat. <br>Peserta akan membuat konsep alur dan cerita dari video tersebut sesuai dengan tema dan brief yang telah ditentukan. Video dibuat dengan menyampaikan konten untuk meningkatkan awareness kepada target audience.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/1o-r3ouvTg-7FSh5RhSrH9bWLUEUuLYCA?usp=drive_link" target="_blank"><button class="btn btn-brief">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- CONTAINER AGNI -->
                <div class="container-agni-d" id="agni">
                    <div class="header-agni">
                        <div class="span-agni">
                            <h1 class="title-agni">AGNI</h1>
                        </div>
                        <div class="sub-header mt-3">
                            <div class="sub-header-left">
                                <h5>Kategori Lomba</h5>
                                <h3>Desain Interior</h3>
                            </div>
                            <div class="sub-header-right font2">
                                <h2>CATEGORY</h2>
                            </div>
                        </div>
                    </div>

                    <!-- POLICE LINE -->
                    <div class="police-line-agni d-flex justify-content-center">
                        <div class="slider-tracks">
                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="198" height="199" viewBox="0 0 198 199" fill="none">
                                    <path d="M98.8197 0.515625L121.879 76.2762L197.639 99.3353L121.879 122.394L98.8197 198.155L75.7606 122.394L0 99.3353L75.7606 76.2762L98.8197 0.515625Z" fill="url(#paint0_linear_2876_1099)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1099" x1="98.8197" y1="50.7274" x2="98.8197" y2="198.155" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A62B2E" />
                                            <stop offset="1" stop-color="#A62B2E" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="retail-design" src="assets/compe/agni-icon/retail-design.png" alt="">
                            </div>

                            <div class="icon-sneakers">
                                <div class="kotak-agni"></div>
                                <img class="living-room" src="assets/compe/agni-icon/living-room.png" alt="">
                            </div>

                            <div class="lingkaran-agni">
                                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150" fill="none">
                                    <circle cx="74.8374" cy="75.2998" r="74.5723" fill="url(#paint0_linear_2876_1105)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1105" x1="74.8374" y1="38.6189" x2="74.8374" y2="149.872" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A62B2E" />
                                            <stop offset="1" stop-color="#A62B2E" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="work-desk" src="assets/compe/agni-icon/work-desk.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="details-agni-sneakers">
                        <div class="img-details">
                            <div class="icon-agni">
                                <svg xmlns="http://www.w3.org/2000/svg" width="198" height="199" viewBox="0 0 198 199" fill="none">
                                    <path d="M98.8197 0.515625L121.879 76.2762L197.639 99.3353L121.879 122.394L98.8197 198.155L75.7606 122.394L0 99.3353L75.7606 76.2762L98.8197 0.515625Z" fill="url(#paint0_linear_2876_1099)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1099" x1="98.8197" y1="50.7274" x2="98.8197" y2="198.155" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A62B2E" />
                                            <stop offset="1" stop-color="#A62B2E" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="retail-design" src="assets/compe/agni-icon/retail-design.png" alt="">
                            </div>
                        </div>
                        <div class="text-details">
                            <h1 class="text-details-header font2">RETAIL STORE DESIGN</h1>
                            <p class="text-details-content">
                                <b><i>Retail Store Design</i></b> adalah lomba dimana peserta mendesain sebuah ruangan toko retail.
                                <br>
                                Peserta diharapkan membuat desain ruangan yang kondusif dan mampu mendorong konsumen untuk membeli produk.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/1HcSf1SDuM6DzhsyzjEkC5JAF_g0dfltD?usp=drive_link" target="_blank"><button class="btn btn-brief">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                    </div>

                    <div class="details-agni-sneakers">
                        <div class="text-details">
                            <h1 class="text-details-header font2">Living Room Sketch</h1>
                            <p class="text-details-content">
                                <b><i>Living Room Sketch</i></b> adalah sebuah lomba dimana peserta diminta untuk membuat sketsa manual ruang tamu.
                                <br>
                                Peserta diharapkan dapat membuat sketsa desain ruang tamu yang sesuai dengan studi kasus yang telah diberikan.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/1Hloe0wnwEVsnNtaa1oeT43UzXpNu_Aia?usp=drive_link" target="_blank"><button class="btn btn-brief">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                        <div class="img-details">
                            <div class="icon-sneakers">
                                <div class="kotak-agni2"></div>
                                <img class="living-room-2" src="assets/compe/agni-icon/living-room.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="details-agni-sneakers">
                        <div class="img-details">
                            <div class="lingkaran-agni-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 150 150" fill="none">
                                    <circle cx="74.8374" cy="75.2998" r="74.5723" fill="url(#paint0_linear_2876_1105)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1105" x1="74.8374" y1="38.6189" x2="74.8374" y2="149.872" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#A62B2E" />
                                            <stop offset="1" stop-color="#A62B2E" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="work-desk" src="assets/compe/agni-icon/work-desk.png" alt="">
                            </div>
                        </div>
                        <div class="text-details">
                            <h1 class="text-details-header font2">Multifunction Work Desk</h1>
                            <p class="text-details-content">
                                <b><i>Multifunction Work Desk</i></b> adalah sebuah lomba dimana peserta diminta untuk menciptakan suatu inovasi meja kerja yang memiliki kegunaan multifungsi.
                                <br>
                                Peserta membuat karya sesuai dengan brief yang telah ditentukan panitia.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/1HoaTnY-CTQa-MzBvfnjRRuszuhYiGZHQ?usp=drive_link" target="_blank"><button class="btn btn-brief">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- BAYU -->
                <div class="container-bayu-d" id="bayu">
                    <div class="header-bayu">
                        <div class="span-bayu">
                            <h1 class="title-bayu">BAYU</h1>
                        </div>
                        <div class="sub-header mt-3">
                            <div class="sub-header-left">
                                <h5>Kategori Lomba</h5>
                                <h3>Desain Produk</h3>
                            </div>
                            <div class="sub-header-right font2">
                                <h2>CATEGORY</h2>
                            </div>
                        </div>
                    </div>

                    <!-- POLICE LINE -->
                    <div class="police-line-bayu d-flex justify-content-center">
                        <div class="slider-tracks">
                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="198" height="198" viewBox="0 0 198 198" fill="none">
                                    <path d="M98.8197 0L121.879 75.7606L197.639 98.8197L121.879 121.879L98.8197 197.639L75.7606 121.879L0 98.8197L75.7606 75.7606L98.8197 0Z" fill="url(#paint0_linear_2876_1051)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1051" x1="98.8197" y1="50.2118" x2="98.8197" y2="197.639" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#E09B26" />
                                            <stop offset="1" stop-color="#E09B26" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="product-innovation" src="assets/compe/bayu-icon/product-innovation.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="details-bayu-sneakers">
                        <div class="img-details">
                            <div class="icon-bayu">
                                <svg xmlns="http://www.w3.org/2000/svg" width="198" height="198" viewBox="0 0 198 198" fill="none">
                                    <path d="M98.8197 0L121.879 75.7606L197.639 98.8197L121.879 121.879L98.8197 197.639L75.7606 121.879L0 98.8197L75.7606 75.7606L98.8197 0Z" fill="url(#paint0_linear_2876_1051)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1051" x1="98.8197" y1="50.2118" x2="98.8197" y2="197.639" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#E09B26" />
                                            <stop offset="1" stop-color="#E09B26" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="product-innovation" src="assets/compe/bayu-icon/product-innovation.png" alt="">
                            </div>
                        </div>
                        <div class="text-details">
                            <h1 class="text-details-header font2">Product Innovation</h1>
                            <p class="text-details-content">
                                <b><i>Product Innovation</i></b> merupakan sebuah lomba dimana peserta diminta untuk menciptakan produk yang inovatif dan memiliki dampak baik dalam kehidupan sehari-hari.
                                <br>
                                Peserta diharapkan dapat mengembangkan nilai efisiensi kegunaan produk.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/1eF52pjbkuoKKY1V9rgTpctFy5pM1L96y?usp=drive_link" target="_blank"><button class="btn btn-brief">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- BUANA -->
                <div class="container-buana-d" id="buana">
                    <div class="header-buana">
                        <div class="span-buana">
                            <h1 class="title-buana">BUANA</h1>
                        </div>
                        <div class="sub-header mt-3">
                            <div class="sub-header-left">
                                <h5>Kategori Lomba</h5>
                                <h3>SMA</h3>
                            </div>
                            <div class="sub-header-right font2">
                                <h2>CATEGORY</h2>
                            </div>
                        </div>
                    </div>

                    <!-- POLICE LINE -->
                    <div class="police-line-buana">
                        <div class="slider-track-buana">
                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="241" height="241" viewBox="0 0 241 241" fill="none">
                                    <path d="M120.5 0L148.618 92.3819L241 120.5L148.618 148.618L120.5 241L92.3819 148.618L0 120.5L92.3819 92.3819L120.5 0Z" fill="url(#paint0_linear_2876_1281)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1281" x1="120.5" y1="61.2279" x2="120.5" y2="241" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#697D35" />
                                            <stop offset="0.0001" stop-color="#697D35" />
                                            <stop offset="1" stop-color="#697D35" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="game-design" src="assets/compe/buana-icon/game-design.png" alt="">
                            </div>

                            <div class="icon-sneakers">
                                <div class="kotak-buana"></div>
                                <img class="fashion-illus" src="assets/compe/buana-icon/fashion-illus.png" alt="">
                            </div>

                            <div class="icon-sneakers lingkaran">
                                <svg xmlns="http://www.w3.org/2000/svg" width="217" height="218" viewBox="0 0 217 218" fill="none">
                                    <circle cx="108.5" cy="109.484" r="108.5" fill="url(#paint0_linear_2876_1218)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1218" x1="108.5" y1="56.1144" x2="108.5" y2="217.984" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#697D35" />
                                            <stop offset="0.0001" stop-color="#697D35" />
                                            <stop offset="1" stop-color="#697D35" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                </svg>
                                <img class="comic-strip" src="assets/compe/buana-icon/comic-strip.png" alt="">
                            </div>

                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="189" height="218" viewBox="0 0 189 218" fill="none">
                                    <path d="M94.5 0.85498L188.464 55.105V163.605L94.5 217.855L0.536247 163.605V55.105L94.5 0.85498Z" fill="url(#paint0_linear_2876_1311)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1311" x1="94.5" y1="55.9855" x2="94.5" y2="217.855" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#697D35" />
                                            <stop offset="0.0001" stop-color="#697D35" />
                                            <stop offset="1" stop-color="#697D35" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="instagram-content" src="assets/compe/buana-icon/instagram-content.png" alt="">
                            </div>

                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="217" height="218" viewBox="0 0 217 218" fill="none">
                                    <path d="M108.5 0.85498L132.583 51.2152L185.222 32.6339L166.64 85.2727L217 109.355L166.64 133.437L185.222 186.076L132.583 167.495L108.5 217.855L84.4182 167.495L31.7794 186.076L50.3608 133.437L0.000488281 109.355L50.3608 85.2727L31.7794 32.6339L84.4182 51.2152L108.5 0.85498Z" fill="url(#paint0_linear_2876_1312)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1312" x1="108.5" y1="55.9855" x2="108.5" y2="217.855" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#697D35" />
                                            <stop offset="0.0001" stop-color="#697D35" />
                                            <stop offset="1" stop-color="#697D35" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="room-styling" style="top: 40px;" src="assets/compe/buana-icon/room-styling.png" alt="">
                            </div>

                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="218" height="194" viewBox="0 0 218 194" fill="none">
                                    <path d="M109 0.85498L218 193.855L0 193.855L109 0.85498Z" fill="url(#paint0_linear_2876_1327)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1327" x1="109" y1="49.8881" x2="109" y2="193.855" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#697D35" />
                                            <stop offset="0.0001" stop-color="#697D35" />
                                            <stop offset="1" stop-color="#697D35" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="chinese-story" src="assets/compe/buana-icon/chinese-story.png" alt="">
                            </div>

                            <div class="icon-sneakers  icon-sneakers-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="217" height="218" viewBox="0 0 217 218" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M143.709 0.85498H73.2916V74.1466H3.07803e-06L0 144.564H73.2916V217.855H143.709V144.564H217V74.1466H143.709V0.85498Z" fill="url(#paint0_linear_2876_1331)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1331" x1="108.5" y1="55.9855" x2="108.5" y2="217.855" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#697D35" />
                                            <stop offset="0.0001" stop-color="#697D35" />
                                            <stop offset="1" stop-color="#697D35" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="story-writing" src="assets/compe/buana-icon/story-writing.png" alt="">
                            </div>

                        </div>
                    </div>


                    <!-- DETAILS BUANA -->
                    <div class="details-buana-sneakers">
                        <div class="img-details">
                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="241" height="241" viewBox="0 0 241 241" fill="none">
                                    <path d="M120.5 0L148.618 92.3819L241 120.5L148.618 148.618L120.5 241L92.3819 148.618L0 120.5L92.3819 92.3819L120.5 0Z" fill="url(#paint0_linear_2876_1281)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1281" x1="120.5" y1="61.2279" x2="120.5" y2="241" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#697D35" />
                                            <stop offset="0.0001" stop-color="#697D35" />
                                            <stop offset="1" stop-color="#697D35" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="game-design" src="assets/compe/buana-icon/game-design.png" alt="">
                            </div>
                        </div>
                        <div class="text-details">
                            <h1 class="text-details-header font2">Game Character Design</h1>
                            <p class="text-details-content">
                                <b><i>Game Character Design</i></b> adalah lomba dimana peserta membuat sebuah desain ilustrasi karakter yang mampu menggambarkan tema yang telah ditentukan.
                                <br>
                                Peserta membuat karya sesuai dengan brief yang diberikan oleh panitia.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/1Hcwzt-9_1J0OmWdAX_WQNXci8v4NXSoI?usp=drive_link" target="_blank"><button class="btn btn-brief btn-buana">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                    </div>

                    <div class="details-buana-sneakers">
                        <div class="text-details">
                            <h1 class="text-details-header font2">Punggawa Fashion Illustration</h1>
                            <p class="text-details-content">
                                <b><i>Punggawa Fashion Illustration</i></b> merupakan suatu lomba dimana peserta diminta untuk membuat ilustrasi desain baju pada karakter Punggawa.
                                <br>
                                Peserta diminta memilih 2 dari 4 karakter Punggawa yang ada, lalu mendesain baju yang sesuai dengan karakteristik Punggawa serta brief yang ada.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/1vV2qxZJhqJzue9hgF-pEbdR7ErkFQqfB?usp=drive_link" target="_blank"><button class="btn btn-brief btn-buana">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                        <div class="img-details">
                            <div class="icon-sneakers">
                                <div class="kotak-buana2"></div>
                                <img class="fashion-illus2" src="assets/compe/buana-icon/fashion-illus.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="details-buana-sneakers">
                        <div class="img-details">
                            <div class="icon-sneakers lingkaran">
                                <svg xmlns="http://www.w3.org/2000/svg" width="217" height="218" viewBox="0 0 217 218" fill="none">
                                    <circle cx="108.5" cy="109.484" r="108.5" fill="url(#paint0_linear_2876_1218)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1218" x1="108.5" y1="56.1144" x2="108.5" y2="217.984" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#697D35" />
                                            <stop offset="0.0001" stop-color="#697D35" />
                                            <stop offset="1" stop-color="#697D35" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                </svg>
                                <img class="comic-strip" src="assets/compe/buana-icon/comic-strip.png" alt="">
                            </div>
                        </div>
                        <div class="text-details">
                            <h1 class="text-details-header font2">Comic Strip</h1>
                            <p class="text-details-content">
                                <b><i>Comic Strip</i></b> merupakan lomba dimana peserta akan membuat sebuah komik. Hasil karya komik dapat dibuat secara digital maupun manual.
                                <br>
                                Peserta akan menciptakan komik sesuai dengan tema dan brief yang telah ditentukan oleh panitia.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/11RPVnAVcITCPNkmbrBko8VAMCVltPJ88?usp=drive_link" target="_blank"><button class="btn btn-brief btn-buana">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                    </div>


                    <div class="details-buana-sneakers">
                        <div class="text-details">
                            <h1 class="text-details-header font2">Instagram Reels Content</h1>
                            <p class="text-details-content">
                                <b><i>Instagram Reels Content</i></b> merupakan lomba dimana peserta diminta untuk membuat sebuah video konten mengenai acara Bharatika Creative Design Festival 2024.
                                <br>
                                Peserta juga akan melengkapi hasil video dengan membuat caption reels yang menarik.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/1BzTtze6CVbXQ71GBYzNRaM-o4NcDf2hs?usp=drive_link" target="_blank"><button class="btn btn-brief btn-buana">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                        <div class="img-details img-details2">
                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="189" height="218" viewBox="0 0 189 218" fill="none">
                                    <path d="M94.5 0.85498L188.464 55.105V163.605L94.5 217.855L0.536247 163.605V55.105L94.5 0.85498Z" fill="url(#paint0_linear_2876_1311)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1311" x1="94.5" y1="55.9855" x2="94.5" y2="217.855" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#697D35" />
                                            <stop offset="0.0001" stop-color="#697D35" />
                                            <stop offset="1" stop-color="#697D35" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="instagram-content" src="assets/compe/buana-icon/instagram-content.png" alt="">
                            </div>
                        </div>
                    </div>


                    <div class="details-buana-sneakers">
                        <div class="img-details">
                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="217" height="218" viewBox="0 0 217 218" fill="none">
                                    <path d="M108.5 0.85498L132.583 51.2152L185.222 32.6339L166.64 85.2727L217 109.355L166.64 133.437L185.222 186.076L132.583 167.495L108.5 217.855L84.4182 167.495L31.7794 186.076L50.3608 133.437L0.000488281 109.355L50.3608 85.2727L31.7794 32.6339L84.4182 51.2152L108.5 0.85498Z" fill="url(#paint0_linear_2876_1312)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1312" x1="108.5" y1="55.9855" x2="108.5" y2="217.855" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#697D35" />
                                            <stop offset="0.0001" stop-color="#697D35" />
                                            <stop offset="1" stop-color="#697D35" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="room-styling" style="top: 40px;" src="assets/compe/buana-icon/room-styling.png" alt="">
                            </div>
                        </div>
                        <div class="text-details">
                            <h1 class="text-details-header font2">Dream Room Styling</h1>
                            <p class="text-details-content">
                                <b><i>Dream Room Styling</i></b> merupakan lomba dimana peserta diminta untuk membuat sebuah desain ruangan impiannya dengan tema yang ditentukan. Hasil karya ruangan dapat dibuat secara manual.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/12EppAOJwuKosqXyecUep3S9YwP6Y7eQw?usp=drive_link" target="_blank"><button class="btn btn-brief btn-buana">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                    </div>

                    <div class="details-buana-sneakers">
                        <div class="text-details">
                            <h1 class="text-details-header font2">Chinese Story Telling</h1>
                            <p class="text-details-content">
                                <b><i>Chinese Story Telling</i></b> merupakan lomba dimana peserta diminta untuk membuat sebuah video bercerita dengan bahasa mandarin.
                                <br>
                                Peserta akan bercerita secara lisan yang dapat memikat audiens.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/14OpYppXE7gnG60Qeu4exN_GLw1u7uRU2?usp=drive_link" target="_blank"><button class="btn btn-brief btn-buana">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                        <div class="img-details img-details2">
                            <div class="icon-sneakers">
                                <svg xmlns="http://www.w3.org/2000/svg" width="218" height="194" viewBox="0 0 218 194" fill="none">
                                    <path d="M109 0.85498L218 193.855L0 193.855L109 0.85498Z" fill="url(#paint0_linear_2876_1327)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1327" x1="109" y1="49.8881" x2="109" y2="193.855" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#697D35" />
                                            <stop offset="0.0001" stop-color="#697D35" />
                                            <stop offset="1" stop-color="#697D35" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="chinese-story" src="assets/compe/buana-icon/chinese-story.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="details-buana-sneakers">
                        <div class="img-details">
                            <div class="icon-sneakers  icon-sneakers-last">
                                <svg xmlns="http://www.w3.org/2000/svg" width="217" height="218" viewBox="0 0 217 218" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M143.709 0.85498H73.2916V74.1466H3.07803e-06L0 144.564H73.2916V217.855H143.709V144.564H217V74.1466H143.709V0.85498Z" fill="url(#paint0_linear_2876_1331)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2876_1331" x1="108.5" y1="55.9855" x2="108.5" y2="217.855" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#697D35" />
                                            <stop offset="0.0001" stop-color="#697D35" />
                                            <stop offset="1" stop-color="#697D35" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <img class="story-writing" src="assets/compe/buana-icon/story-writing.png" alt="">
                            </div>
                        </div>
                        <div class="text-details">
                            <h1 class="text-details-header font2">Infographic Poster</h1>
                            <p class="text-details-content">
                                <b><i>Infographic Poster</i></b> merupakan lomba dimana peserta diminta untuk membuat poster visual grafis berisi informasi, data, atau pengetahuan dengan menggunakan bahasa inggris. Infografis dibuat sesuai dengan tema yang telah ditentukan.
                            </p>
                            <div class="button-container">
                                <a href="https://drive.google.com/drive/folders/1_2f1KvqXfoiHd5bLRYu_OCy_G5A8jhdH?usp=sharing" target="_blank"><button class="btn btn-brief btn-buana">BRIEF LOMBA</button></a>
                                <button class="btn btn-submit" onclick="tutup()">DAFTAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "competition2.php" ?>

    <?php include "footer.php" ?>

    <script src="assets/js/nav.js"></script>

    <script>
        function daftar(id) {
            window.location.href = "daftar.php?id=" + id;
        }

        function tutup() {
            Swal.fire({
                title: "Oops...",
                text: "Pendaftaran lomba ini telah ditutup. Sampai jumpa tahun depan",
                icon: "error",
                button: "OK"
            });
        }

        $(document).ready(function() {
            $(".compeNavbar").addClass("active disabled");
            $(".compeNavbar1").prepend('<svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><path d = "M7 0L8.63342 5.36658L14 7L8.63342 8.63342L7 14L5.36658 8.63342L0 7L5.36658 5.36658L7 0Z"fill = "#FAF6E6" / ></svg> ');
        });
    </script>
</body>

</html>