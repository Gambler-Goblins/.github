<style>
footer {
    background-color: #2c3e50;
    color: #ecf0f1;
    padding: 5px 0;
    width: 100%;
    text-align: center;
    margin-top: auto;
}

.footer-container {
    font-family: monospace;
    font-size: 0.75em;
    line-height: 1;
    color: #95a5a6;
    padding: 15px 0;
    text-align: left;
    margin-top: auto;
    width: 100%;
    white-space: pre-line;
}

.footer-container div.footer-text {
    padding-left: 50px;
}

body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    margin: 0;
}

.footer-container a {
    color: inherit;
    /* Наследует цвет текста футера */
}

/* Убираем все состояния ссылок */
.footer-container a:hover,
.footer-container a:focus,
.footer-container a:active,
.footer-container a:visited {
    color: inherit;
}
</style>
<footer>
    <div class="footer-container">
        <div class="footer-text">
            <?echo $year?>, <a href="https://github.com/Gambler-Goblins" target="_blank">Gambler Goblins</a>
            God bless open source
        </div>
    </div>
</footer>