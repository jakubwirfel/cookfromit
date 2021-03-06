<?php include 'inc/header.php';?>
<main class="main">
    <div class="send-recipe-container">
        <section class="send-recipe">
            <div class="center-box">
                <div class="title">
                    <h1>Send us</h1>
                        <img src="public/assets/communications-white.svg" alt="magnification-glass"/>
                    <h1>your recipe</h1>
                </div>
                <div class="subtitle">
                    <h2>Just fill in the form, fast and simple</h2>
                </div>
            </div>
            <div class="center-box">
                <form method="POST" action="send_recipe.php">
                    <div class="form-box-top">
                        <div class="form-left">
                            <input type="text" autocomplete="off" placeholder="Dish name" name="dishName" required/>
                            <select class="select" name="difficulty" required>
                                <option disabled selected>Level of complexity</option>
                                <?php foreach($difficultys as $difficulty): ?>
                                    <option value="<?php echo $difficulty -> DIID ?>"><?php echo $difficulty -> DNAM; ?></option>
                                <?php endforeach;?>
                            </select>
                            <input id="cookingtime" type="text" autocomplete="off" placeholder="Cooking time (minutes)" name="time" required>
                            <input type="text" autocomplete="off" placeholder="For how many people" name="peopleCount" required>
                            <select class="select" name="category" required>
                                <option disabled selected>Category</option>
                                <?php foreach($categories as $category): ?>
                                    <option value="<?php echo $category -> RCID ?>"><?php echo $category -> RCNA; ?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-right">
                            <div class="add-ingredients">
                                <input class="ig" type="text" autocomplete="off" placeholder="Add ingredients" />
                                <input hidden class="measure"/>
                                <input hidden class="igId"/>
                                <i id="add" class="fas fa-plus"></i>
                                <div class="result" id="scroll">

                                </div>
                            </div>
                            <div class="ing-box">
                            </div>
                        </div>
                    </div>
                    <div class="form-box-bottom">
                        <div class="step-add">
                            <textarea placeholder="Steps to do" class="add-steps"></textarea>
                            <div class="button-add" id="stepAdd"><i class="fas fa-plus"></i></div>
                        </div>
                    </div>
                    <div class="button-box">
                        <button class="submit-button" type="submit" name="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="78.406" height="75.972" viewBox="0 0 58.406 55.972">
                            <g id="communications" transform="translate(0 0)">
                                <path id="Path_68" data-name="Path 68" class="cls-1" d="M8.75,17.612V28.9a1.824,1.824,0,0,0,3.3,1.08l6.6-8.985Z" transform="translate(12.544 25.248)"/>
                                <path id="Path_69" data-name="Path 69" class="cls-1" d="M57.639.338a1.826,1.826,0,0,0-1.9-.131L.981,28.8a1.826,1.826,0,0,0,.253,3.346l15.222,5.2L48.873,9.632,23.788,39.855,49.3,48.574a1.868,1.868,0,0,0,.589.1,1.824,1.824,0,0,0,1.806-1.555L58.386,2.1A1.828,1.828,0,0,0,57.639.338Z" transform="translate(0 0)"/>
                            </g>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <div class="wave"></div>
</main>
<?php include 'inc/footer.php';?>
<script> </script> <!--BUG taransition fix for Chrome-->
<script src="js/sendRecipe.js"> </script>