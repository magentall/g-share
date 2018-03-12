// Ouverture de la page
$(document).ready(function(){

});

function upload_fichiers(){
  //var cat = $('#sel_cat option:selected').text();
  console.log($('#idf').val());
  $.ajax({
    url:'../controller/upload_fichiers.php',
    data: { id:null,
            idf:$('#idf').val() },
    type: 'post',
    success:function(output){
      $('#lien').html(output);
    }
  });
}
/*

function upload_fichiers_connec(){
  //var cat = $('#sel_cat option:selected').text();
  $.ajax({
    url:'controller/upload_fichiers.php',
    data: { cat:$('#sel_cat option:selected').text(),
            aut:$('#sel_aut option:selected').text(),
            filt:$('#sel_filt option:selected').text()
    },
    type: 'post',
    success:function(output){
      $('#lien').html(output);
    }
  });
}
*/
