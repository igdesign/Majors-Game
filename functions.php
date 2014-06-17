<?php defined('_mcexec') or die();



function buildTables($groups, $row_headers, $row_counts) {
  global $db_host;
  global $db_user;
  global $db_pass;
  global $db_table;




  $db_index = 0;
  $string = '';


  for($i=0; $i < count($groups); $i++) {


    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_table);
    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    }

    $query = 'SELECT *'
           .' FROM `Golfers`'
           .' ORDER BY `order` ASC'
           .' LIMIT '.$db_index.', '.$groups[$i]['count']
           ;




    $db_index = $db_index + $groups[$i]['count'];

    $string .= '
      <div class="group">
        <h2 class="group__title">'.$groups[$i]['name'].'</h2>

        <div class="group-grid">
          <ul class="group-grid__header">
            <li class="group-grid__item--name">Golfer</li><!--
         --><li class="group-grid__item--last-tournaments">'.$row_headers[0].'</li><!--
         --><li class="group-grid__item--last-majors">'.$row_headers[1].'</li><!--
         --><li class="group-grid__item--last-championship">'.$row_headers[2].'</li>
          </ul>';


          if ($result = $mysqli->query($query)) {
            if ($result->num_rows > 0) {
              while ( $row = $result->fetch_object() ) {
                $string .= '
                  <div class="golfer">
                    <input class="golfer__radio" form="picking-the-majors" value="'.$row->name.'" type="radio" id="golfer--'.$groups[$i]['id'].$row->id.'" name="golfer--'.$groups[$i]['id'].'">
                    <label class="golfer__label" for="golfer--'.$groups[$i]['id'].$row->id.'">
                      <ul class="golfer__details">
                        <li class="golfer__name  golfer__country--'.strtolower($row->country).'">'.$row->name.'</li><!--

                       --><ul class="golfer__last-tournaments">
                            <li class="golfer__stat-header">'.$row_headers[0].'</li><!--
                         --><li class="golfer__stat">'.$row->one.'</li><!--
                         --><li class="golfer__stat">'.$row->two.'</li><!--
                         --><li class="golfer__stat">'.$row->three.'</li>
                          </ul><!--

                       --><ul class="golfer__last-majors">
                            <li class="golfer__stat-header">'.$row_headers[1].'</li><!--
                         --><li class="golfer__stat">'.$row->four.'</li><!--
                         --><li class="golfer__stat">'.$row->five.'</li><!--
                         --><li class="golfer__stat">'.$row->six.'</li>
                          </ul><!--

                       --><ul class="golfer__last-championship">
                            <li class="golfer__stat-header">'.$row_headers[2].'</li><!--
                         --><li class="golfer__stat">'.$row->seven.'</li><!--
                         --><li class="golfer__stat">'.$row->eight.'</li><!--
                         --><li class="golfer__stat">'.$row->nine.'</li>
                          </ul>
                      </ul>
                    </label>
                  </div>';
              }

              $result->close();
            }
          }

    $string .= '
        </div>
      </div>';

  }

  return $string;

}

function addScripts( $array = null) {
  $xxx = '';
  foreach( $array as $group ) {
    $xxx .= '
      $$("#'.$group.' tr").addEvent("click", function() {

        var input = this.getElement("input");
        var val   = input.getProperty("value");
        var group = input.getProperty("name");

        Cookie.dispose(group);

        // write cookie
        var entryCookie = Cookie.write(group, val, {duration: 7});

        var newGroup = new Group({
          "group": "'.$group.'",
          "select": this
        });
      });
    ';
  }
  return (string) $xxx;
}