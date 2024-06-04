<?php

  // deciding if firing highlighter
  if (isset($_GET['jumpto'])) {

    $jump_to = $_GET['jumpto'];
    $color = validateColor($jump_to);

    if ($color) {
      highlighter($color);
    }
  }


  // validating the jumpto param
  function validateColor($jump_to) {

    $topic_colors = array(
      "roles" => "red",
      "ux" => "blue",
      "fullstack" => "orange",
      "marketing" => "green",
      "systems" => "pink"
    );

    if (array_key_exists($jump_to, $topic_colors)) {
      $color = $topic_colors[$jump_to];
    }
    else {
      $color = false;
    }

    return $color;
  }


  // takes provided color and highlights its span, scrolls to it, and removes highlight onClick
  function highlighter($color) {

    $color_styling = "
      <style>
        .".$color."-highlight { 
          background-color: var(--highlighter-".$color."); 
          border-radius: 3px;
          font-weight: 600;
          padding-left: 3px;
          padding-right: 3px;
          transition: .5s;
        }
      </style>";

      $color_scripting = '
        <script>
          window.onload = function() {
            const colorId = document.getElementById("'.$color.'-jump");
            colorId.scrollIntoView({ behavior: "smooth", block: "center"});

            var clickFlag = false;
            document.getElementById("about-body").onclick = function(){pageClick()};
            function pageClick() {
              if (clickFlag == false) { 
                const spanArray = document.querySelectorAll("span.'.$color.'-highlight");
                spanArray.forEach((spanItem) => {
                  spanItem.style.backgroundColor = "white";
                  spanItem.style.padding = "0";
                  spanItem.style.fontWeight = "400";
                });
                clickFlag = true;
              }
            }
          }
        </script>';

    echo $color_styling;
    echo $color_scripting;
  }

?>
