<?php session_start();

include("includes/header.php");
include("includes/db-config.php");

?>


<div class="gray-bg">
  <div class="menuTitle">
    <h1 id="quick" onclick="swichMenu(event)">Quick & Easy</h1>
    <h1 id="veggie" onclick="swichMenu(event)">Veggie</h1>
    <h1 id="family" onclick="swichMenu(event)">Family</h1>
  </div>

  <section id="quickPlan" class="boxy">
<?php
$stmt = $pdo->prepare("SELECT * FROM `menu` 
WHERE `mealPlanType` = '1'");

$stmt->execute();
while($row = $stmt->fetch()) { ?>


        <article class="container-box qp">

        <img class="box-img" src="<?php echo($row["imgPath"]); ?>"/>
          <a href="#" class="box-link">
             <div class="box-hover"></div>
           </a>
          <div class="box-content">
            <h3 class="box-title"><?php echo($row["title"]); ?></h3>
            <p><?php echo($row["description"]); ?></p>
            <p class="box-subheader">Ingredient1, ingredient2, ingredient3</p>
          </div>
        </article>

<?php
}
?>
    </section>

    <section id="veggiePlan" class="boxy">
<?php
$stmt = $pdo->prepare("SELECT * FROM `menu` 
WHERE `mealPlanType` = '3'");

$stmt->execute();
while($row = $stmt->fetch()) { ?>


        <article class="container-box vp">

        <img class="box-img" src="<?php echo($row["imgPath"]); ?>"/>
          <a href="#" class="box-link">
             <div class="box-hover"></div>
           </a>
          <div class="box-content">
            <h3 class="box-title"><?php echo($row["title"]); ?></h3>
            <p><?php echo($row["description"]); ?></p>
            <p class="box-subheader">Ingredient1, ingredient2, ingredient3</p>
          </div>
        </article>

<?php
}
?>
    </section>



    <section id="familyPlan" class="boxy">
<?php
$stmt = $pdo->prepare("SELECT * FROM `menu` 
WHERE `mealPlanType` = '2'");

$stmt->execute();
while($row = $stmt->fetch()) { ?>


        <article class="container-box fp">

        <img class="box-img" src="<?php echo($row["imgPath"]); ?>"/>
          <a href="#" class="box-link">
             <div class="box-hover"></div>
           </a>
          <div class="box-content">
            <h3 class="box-title"><?php echo($row["title"]); ?></h3>
            <p><?php echo($row["description"]); ?></p>
            <p class="box-subheader">Ingredient1, ingredient2, ingredient3</p>
          </div>
        </article>

<?php
}
?>
    </section>
    
</div>

  </main>
  <script>

    //GET VEGGIE//

  
    function swichMenu(e){
      var family = document.getElementById("familyPlan");
      var veggie = document.getElementById("veggiePlan");
      var quick = document.getElementById("quickPlan");
      if(e.target.getAttribute("id")=='quick'){
          veggie.setAttribute("class", "hidden");
          family.setAttribute("class", "hidden");
        if(quick.classList.contains("hidden") ){
          family.classList.remove("hidden");
          family.setAttribute("class", "boxy");
        }
      }else if(e.target.getAttribute("id")=='veggie'){

          quick.setAttribute("class", "hidden");
          family.setAttribute("class", "hidden");
        if(veggie.classList.contains("hidden") ){
          veggie.classList.remove("hidden");
          veggie.setAttribute("class", "boxy");
        }

      }else if(e.target.getAttribute("id")=='family'){

          quick.setAttribute("class", "hidden");
          veggie.setAttribute("class", "hidden");
        if(family.classList.contains("hidden") ){
          family.classList.remove("hidden");
          family.setAttribute("class", "boxy");
        }

      }
    }
    </script>
  