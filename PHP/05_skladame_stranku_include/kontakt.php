<?php
    include "assets/partials/header.php";
?>
        <section class="contact">
            <h2>Kontaktujte ma</h2>
            <article>
                <p>Máte otázky alebo chcete spolupracovať? Neváhajte ma kontaktovať prostredníctvom nasledujúcich kanálov:</p>
                <ul>
                    <li>Email:  <a href="mailto:info@peter.sk">info@peter.sk</a></li>
                    <li>Telefón:<a href="tel:+421123456789">+421 12 345 6789</a></li>
                    <li>Adresa: Hlavná ulica 123, Bratislava, Slovensko</li>
                </ul>
            </article>
        </section>

        <section class="form">
            <h2>Napíšte mi správu</h2>
            <article>
                <form action="#">
                    <label for="name">Meno:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Správa:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>

                    <button type="submit">Odoslať</button>
                </form>
            </article>
        </section>
        <?php
    include "assets/partials/header.php";
?>
