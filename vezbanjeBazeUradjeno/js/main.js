$("#btn-izmeni").click(function () {
  const checked = $("input[name=checked-donut]:checked");
  console.log(checked);
  let tds = checked.parent().parent().parent().children();
  console.log(tds);

  $("#idd").val(tds[0].textContent);
  $("#nazivv").val(tds[1].textContent);
  $("#drzavaa").val(tds[2].textContent);
  $("#godinaa").val(tds[3].textContent);
  $("#brojj").val(tds[4].textContent);
});

$("#btn-obrisi").click(function () {
  const checked = $("input[name=checked-donut]:checked");
  const id = checked.val();
  $("#obrisi-idd").val(id);
});
