function prikazi() {
    var x = document.getElementById("pregled");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  } 


$('#btn-izbrisi').click( function(){
  const checked = $('input[type=radio]:checked');
  request = $.ajax({
    url:'crud/delete.php',
    type: 'post',
    data: {'muzejID': checked.val()}
  });
  request.done(function (response, textStatus, jqXHR) {
    if (response === 'Success') {
      checked.closest("tr").remove();
        console.log('Muzej je obrisan ');
        alert('Muzej je obrisan');
        //$('#izmeniForm').reset;
    }
    else {
      console.log('Muzej nije obrisan ' + response);
      alert('Muzej nije obrisan');
    }
});
});

$('#btn-izmeni').click(function () {

  const checked = $('input[name=checked-donut]:checked');

  request = $.ajax({
      url: 'crud/get.php',
      type: 'post',
      data: {'muzejID': checked.val()},
      dataType: 'json'
  });

  request.done(function (response, textStatus, jqXHR) {
      console.log('Popunjena');
      $('#idnaziv').val(response[0]['nazivMuzeja']);
      console.log(response[0]['nazivMuzeja']);

      $('#idgrad').val(response[0]['grad'].trim());
      console.log(response[0]['grad'].trim());
      $('#idgodina').val(response[0]['godinaOsnivanja'].trim());
      console.log(response[0]['godinaOsnivanja'].trim());
      $('#idid').val(checked.val());

      console.log(response);
  });

  request.fail(function (jqXHR, textStatus, errorThrown) {
      console.error('The following error occurred: ' + textStatus, errorThrown);
  });

});

$('#izmeniForm').submit(function () {
  event.preventDefault();
  console.log("Izmena");
  const $form = $(this);
  const $inputs = $form.find('input, select, button');
  const serializedData = $form.serialize();
  console.log(serializedData);
  $inputs.prop('disabled', true);

  request = $.ajax({
      url: 'crud/update.php',
      type: 'post',
      data: serializedData
  });

  request.done(function (response, textStatus, jqXHR) {


      if (response === 'Success') {
          console.log('Muzej je izmenjen');
          location.reload(true);
          //$('#izmeniForm').reset;
      }
      else console.log('Muzej nije izmenjen ' + response);
      console.log(response);
  });

  request.fail(function (jqXHR, textStatus, errorThrown) {
      console.error('The following error occurred: ' + textStatus, errorThrown);
  });


  
});


  $('#btnDodaj').submit(function(){
    $('myModal').modal('toggle');
    return false;
  });

  $('#btn-izmeni').submit(function () {
   
    $('#myModal').modal('toggle');
    return false;
  });

  $('#dodajForm').submit(function () {
    event.preventDefault();
  
    const $form = $(this);
    const $inputs = $form.find('input, select, button');
    const serializedData = $form.serialize();
    console.log(serializedData);
    $inputs.prop('disabled', true);

    request = $.ajax({
        url: 'crud/add.php',
        type: 'post',
        data: serializedData
    });

    request.done(function (response, textStatus, jqXHR) {
        if (response === 'Success') {
            alert('Muzej je dodat');
            location.reload(true);
        }
        else console.log('Muzej nije dodat ' + response);
        console.log(response);
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('The following error occurred: ' + textStatus, errorThrown);
    });
});
