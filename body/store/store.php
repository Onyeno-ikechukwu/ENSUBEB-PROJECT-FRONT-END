<?php
  session_start();
  if (isset($_SESSION["id"]) && $_SESSION["role"] === "store") {
    header("location: ../../index.php");
  } else {
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STORE DEPARTMENT</title>
  <link rel="stylesheet" href="store.css">
</head>
<body>
  <ul class="nav">
    <li class="nav1">
      <img src="../index/logo-YGPAtP36.png" alt="" class="nav1img">
      <div class="shift">
        <h2>ENSUBEB</h2>
        <P>Ensuring education reaches all children</P>
      </div>
    </li>
    <li class="nav2">
      <form action="" method="get">
        <label for="search" class="nav2i">Documentation Search</label>
        <input type="text" class="nav2ii" placeholder="search for heading">
      </form>
    </li>
  </ul>
  <h1 class="div1">STORE DEPARTMENT PAGE</h1>
  <h2 class="div2">List Of Documentations</h2>

  <table style="width:100%">
    <tr>
      <th class="one">S/N</th>
      <th class="two">IMAGES FOR DOCUMENTS AND MATERIALS</th>
      <th class="three">DOCUMENTATION DETAILS</th>
      <th class="four">TIME IT COMES IN</th>
      <th class="five">TIME IT LEAVES</th>
    </tr>
    <tr>
      <td>1</td>
      <td>
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
      </td>
      <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste provident placeat quo amet nemo quam recusandae labore at illum exercitationem natus vitae repudiandae illo culpa sequi, temporibus, omnis ex sed. Pariatur earum quidem maxime laborum veniam! Laborum laudantium amet illo veniam, velit eaque corrupti vel, quisquam magnam illum sit! Assumenda.</td>
      <td>
        1/June/2025 
        <br>
        11:01am
      </td>
      <td>
        5/August/2025 
        <br>
        8:30pm
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
      </td>
      <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste provident placeat quo amet nemo quam recusandae labore at illum exercitationem natus vitae repudiandae illo culpa sequi, temporibus, omnis ex sed. Pariatur earum quidem maxime laborum veniam! Laborum laudantium amet illo veniam, velit eaque corrupti vel, quisquam magnam illum sit! Assumenda.</td>
      <td>
        1/June/2025 
        <br>
        11:01am
      </td>
      <td>
        5/August/2025 
        <br>
        8:30pm
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
      </td>
      <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste provident placeat quo amet nemo quam recusandae labore at illum exercitationem natus vitae repudiandae illo culpa sequi, temporibus, omnis ex sed. Pariatur earum quidem maxime laborum veniam! Laborum laudantium amet illo veniam, velit eaque corrupti vel, quisquam magnam illum sit! Assumenda.</td>
      <td>
        1/June/2025 
        <br>
        11:01am
      </td>
      <td>
        5/August/2025 
        <br>
        8:30pm
      </td>
    </tr>
    <tr>
      <td>4</td>
      <td>
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
      </td>
      <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste provident placeat quo amet nemo quam recusandae labore at illum exercitationem natus vitae repudiandae illo culpa sequi, temporibus, omnis ex sed. Pariatur earum quidem maxime laborum veniam! Laborum laudantium amet illo veniam, velit eaque corrupti vel, quisquam magnam illum sit! Assumenda.</td>
      <td>
        1/June/2025 
        <br>
        11:01am
      </td>
      <td>
        5/August/2025 
        <br>
        8:30pm
      </td>
    </tr>
    <tr>
      <td>5</td>
      <td>
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
      </td>
      <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste provident placeat quo amet nemo quam recusandae labore at illum exercitationem natus vitae repudiandae illo culpa sequi, temporibus, omnis ex sed. Pariatur earum quidem maxime laborum veniam! Laborum laudantium amet illo veniam, velit eaque corrupti vel, quisquam magnam illum sit! Assumenda.</td>
      <td>
        1/June/2025 
        <br>
        11:01am
      </td>
      <td>
        5/August/2025 
        <br>
        8:30pm
      </td>
    </tr>
    <tr>
      <td>6</td>
      <td>
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
      </td>
      <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste provident placeat quo amet nemo quam recusandae labore at illum exercitationem natus vitae repudiandae illo culpa sequi, temporibus, omnis ex sed. Pariatur earum quidem maxime laborum veniam! Laborum laudantium amet illo veniam, velit eaque corrupti vel, quisquam magnam illum sit! Assumenda.</td>
      <td>
        1/June/2025 
        <br>
        11:01am
      </td>
      <td>
        5/August/2025 
        <br>
        8:30pm
      </td>
    </tr>
    <tr>
      <td>7</td>
      <td>
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
      </td>
      <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste provident placeat quo amet nemo quam recusandae labore at illum exercitationem natus vitae repudiandae illo culpa sequi, temporibus, omnis ex sed. Pariatur earum quidem maxime laborum veniam! Laborum laudantium amet illo veniam, velit eaque corrupti vel, quisquam magnam illum sit! Assumenda.</td>
      <td>
        1/June/2025 
        <br>
        11:01am
      </td>
      <td>
        5/August/2025 
        <br>
        8:30pm
      </td>
    </tr>
    <tr>
      <td>8</td>
      <td>
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
      </td>
      <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste provident placeat quo amet nemo quam recusandae labore at illum exercitationem natus vitae repudiandae illo culpa sequi, temporibus, omnis ex sed. Pariatur earum quidem maxime laborum veniam! Laborum laudantium amet illo veniam, velit eaque corrupti vel, quisquam magnam illum sit! Assumenda.</td>
      <td>
        1/June/2025 
        <br>
        11:01am
      </td>
      <td>
        5/August/2025 
        <br>
        8:30pm
      </td>
    </tr>
    <tr>
      <td>9</td>
      <td>
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
      </td>
      <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste provident placeat quo amet nemo quam recusandae labore at illum exercitationem natus vitae repudiandae illo culpa sequi, temporibus, omnis ex sed. Pariatur earum quidem maxime laborum veniam! Laborum laudantium amet illo veniam, velit eaque corrupti vel, quisquam magnam illum sit! Assumenda.</td>
      <td>
        1/June/2025 
        <br>
        11:01am
      </td>
      <td>
        5/August/2025 
        <br>
        8:30pm
      </td>
    </tr>
    <tr>
      <td>10</td>
      <td>
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
        <img src="../index/1c8fea0e-ec34-4ce7-ba52-6cdb64108bc3.jpeg" alt="" class="nav2iiimg">
      </td>
      <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste provident placeat quo amet nemo quam recusandae labore at illum exercitationem natus vitae repudiandae illo culpa sequi, temporibus, omnis ex sed. Pariatur earum quidem maxime laborum veniam! Laborum laudantium amet illo veniam, velit eaque corrupti vel, quisquam magnam illum sit! Assumenda.</td>
      <td>
        1/June/2025 
        <br>
        11:01am
      </td>
      <td>
        5/August/2025 
        <br>
        8:30pm
      </td>
    </tr>
  </table>
  <div class="div9">
    <div class="div9i next"><img src="../index/prev.png" alt="" class="div9img "></div>
    <div class="div9ii prev"><img src="../index/next.png" alt="" class="div9img "></div>
  </div>
  <h2 class="div22">Add Project</h2>
  <form action="" method="post" class="form">
    <label for="" class="label">Images :</label>
    <input type="file" class="cover">
    <input type="file" placeholder="optional" class="cover">
    <input type="file" placeholder="optional" class="cover">
    <input type="file" placeholder="optional" class="cover">
    <label for="" class="label">Documtation Details :</label>
    <textarea name="heading" class="cover"></textarea><br>
    <button>ADD POST</button>
  </form>

  <div class="fifth">
    <div class="fifth1">
      <h2>WORKING HOURS</h2>
      <div class="ps fifthi">
        <p class="drag">Monday - Friday</p>
        <p class="drag">8am - 4pm</p>
      </div>
    </div>
    <div class="fifth2">
      <h2 class="h2">CONTACTS</h2>
      <div class="fifthi">
        <p> <img src="../index/email-8-svgrepo-com.svg" alt="" class="fifthimg"> Ensubeb@enugustate.gov.ng</p>
        <p class="drag"> <img src="../index/location-pin-alt-svgrepo-com.svg" alt="" class="fifthimg"> Upper Presidential Road Independence Layout,Weac Bus Stop, Enugu</p>
        <p class="drag"> <img src="../index/phone-call-svgrepo-com.svg" alt="" class="fifthimg"> 08036703633</p>
      </div>
    </div>
    <div class="fifth3">
      <h2 class="h2">SOCIALS</h2>
      <div class="fifthii">
        <div><a href=""><img src="../index/facebook-svgrepo-com.svg" alt="" class="fifthimgi"></a></div>
        <div><a href=""><img src="../index/whatsapp-svgrepo-com.svg" alt="" class="fifthimgi"></a></div>
        <div class="down"><a href=""><img src="../index/instagram-167-svgrepo-com.svg" alt="" class="fifthimgii"></a></div>
        <div class="down"><a href=""><img src="../index/twitter-svgrepo-com.svg" alt="" class="fifthimgii"></a></div>
      </div>
    </div>  
  </div>
  <div class="last">
    <p class="last1">@  All Copy Rights Belongs To ENSUBEB</p>
  </div>
</body>
</html>
  <?php
    }
  ?>