$(function() {
  var dateFormat = "dd/mm/yyyy",
    productPrice = $('#base-price').val();

  $('#datepicker').datepicker({
    format: "dd/mm/yy",
    weekStart: 1,
    todayBtn: "linked",
    autoclose: true,
    startDate: '0',
    endDate: '+30d',
  }).on('change', function() {
    calcPrice();
  });

  $('#quantity_lot').on('change', function() {
    calcPrice();
  })

  function calcPrice() {
    var lot  = $('#quantity_lot').val() || 1;
    var days = calcDays();
    var price  = _.round(productPrice * days * lot, 2);
    $('#price').val(price.toFixed(2));
    $('#duration').val(days);
  }
  function calcDays() {
    var days = Math.ceil( ($('#until_at').datepicker('getDate') - $('#from_at').datepicker('getDate')) / (1000 * 60 * 60 * 24));
    return (days > 0 ? days + 1 : 1); // set minimum day to 1
  }
})
