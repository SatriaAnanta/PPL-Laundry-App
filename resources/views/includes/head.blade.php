<script src="{{ asset('js/app.js') }}" defer></script>    
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

<style>
    body{
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    footer{
        margin-top: auto;
    }
    @media (min-width: 768px) {
        .hero-form {
            padding-top: 12rem;
            padding-bottom: 12rem;
        }
    }
    .hero-form {
        position: relative;
        background-color: #343a40;
        background: url(../img/bg-masthead.jpeg) no-repeat center center;
        background-size: cover;
        padding-top: 8rem;
        padding-bottom: 8rem;
    }
    .hero-form:before {
        content: "";
        position: absolute;
        background-color: #1c375e;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0.5;
    }

    #tracking-form {
        margin-top: 2em;
        margin-bottom: 1em;
    }
    /* #tracking-form .input-group {
        padding: 10px 10px 10px 24px;
        background: #fff;
        border-radius: 3px;
    }
    .input-group {
        position: relative;
        display: table;
        border-collapse: separate;
    }
    #tracking-form input {
        font-size: 1.6em;
        font-weight: 200;
        padding-left: 0;
        border: none;
        box-shadow: none;
        -webkit-box-shadow: none;
    }
    .input-group-btn {
        position: relative;
        font-size: 0;
        white-space: nowrap;
    } */
    .footer-copyright {
        border-top: 1px solid #e1e1e1;
        padding: 25px 0 20px;
        overflow: hidden;
        margin-top: 10px;
    }
    .footer {
        padding-top: 70px;
        padding-bottom: 0;
    }
    .footer-copyright-text-left {
        font-size: 15px;
        color: #707070;
        float: left;
    }
    .footer-copyright-link-right {
        float: right;
    }
</style>