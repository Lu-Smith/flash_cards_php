<main class="main-entry">
<h2 id="enterNumber">Enter a number:</h2>
<form action="<?php $_SERVER['PHP_SELF'] ?>" class="main-entry_form" method="GET">
   <input
   class="main-entry_input"
   id="num"
   name="num"
   aria-labeled="enterNumber"
   type="text"
   maxlength="2"
   autofocus
   require />
   <button class="main-entry_button">Go</button>
</form>
</main>