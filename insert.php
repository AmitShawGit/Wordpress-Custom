<?php
/**
 * The template name: Insert
 * //
 */

get_header(); ?>




<div id="primary" class="content-area" style=" width: 800px;margin: 73px 215px 0px;" >


  <h2>How to submit custom post type in wordpress from the Front-End</h2>
  <form method="post" enctype="multipart/form-data">


    <div class="form-group">
      <label for="title">Post Title:</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>

	<div class="form-group">
       <label>Feaured Image</label>
       <input type="file"  class="form-control"  name="my-file" placeholder="File Upload" />
  </div>


    <div class="form-group">
      <label for="pwd">Post Description :</label>
      <textarea class="form-control"  name="description"></textarea>
    </div>

	<BR>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>




</div>





<?php
get_footer();
?>