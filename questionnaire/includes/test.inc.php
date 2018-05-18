<style>
* {
    box-sizing: border-box;
}
.row {
  width:800px;

}
/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 30px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
p{
  font-size: 15px;
}
</style>
<center>
<div class="row">
  <div class="column" style="background-color:#fff;">
    <img src="https://cdn3.iconfinder.com/data/icons/forall/995/challenge-512.png"  width="190" height="190"><br><br>
    <p>Take less than 15 minutes.</p>
  </div>

  <div class="column" style="background-color:#fff;">
    <img src="https://png.icons8.com/color/1600/person-male.png"  width="190" height="190"><br><br>
    <p>Try not leave any question unanswered.</p>
    </div>

  <div class="column" style="background-color:#fff;">
    <img src="http://www.cleanslatescribe.com/wp-content/uploads/2015/07/1436946674_vector_323_15.png"  width="190" height="190"><br><br>
    <p>Answer honestly.</p>
  </div>
</div>
</center>
