/* Insert your javascript here */

function change() {
  var day_type = $("[type=radio]:checked").data("pricing");
  // STA QTY
  var STA_qty = $('select[name="seats[STA]"] option:selected').val();
  if (STA_qty != "") {
    var STA_full = $('select[name="seats[STA]"] option:selected').data(
      "fullprice"
    );
    var STA_disc = $('select[name="seats[STA]"] option:selected').data(
      "discprice"
    );
    if (day_type == "disc") {
      var total = STA_qty * STA_disc;
      document.getElementById("sta_label").value = " Total: $" + total;
    } else {
      var total = STA_qty * STA_full;
      console.log(total);
      document.getElementById("sta_label").value = " Total: $" + total;
    }
  } else {
    document.getElementById("sta_label").value = "";
  }

  // STP QTY
  var STP_qty = $('select[name="seats[STP]"] option:selected').val();
  if (STP_qty != "") {
    var STP_full = $('select[name="seats[STP]"] option:selected').data(
      "fullprice"
    );
    var STP_disc = $('select[name="seats[STP]"] option:selected').data(
      "discprice"
    );
    if (day_type == "disc") {
      var total = STP_qty * STP_disc;
      document.getElementById("stp_label").value = " Total: $" + total;
    } else {
      var total = STP_qty * STP_full;
      console.log(total);
      document.getElementById("stp_label").value = " Total: $" + total;
    }
  } else {
    document.getElementById("stp_label").value = "";
  }

  // STC QTY
  var STC_qty = $('select[name="seats[STC]"] option:selected').val();
  if (STC_qty != "") {
    var STC_full = $('select[name="seats[STC]"] option:selected').data(
      "fullprice"
    );
    var STC_disc = $('select[name="seats[STC]"] option:selected').data(
      "discprice"
    );
    if (day_type == "disc") {
      var total = STC_qty * STC_disc;
      document.getElementById("stc_label").value = " Total: $" + total;
    } else {
      var total = STC_qty * STC_full;
      console.log(total);
      document.getElementById("stc_label").value = " Total: $" + total;
    }
  } else {
    document.getElementById("stc_label").value = "";
  }

  // FCA QTY
  var FCA_qty = $('select[name="seats[FCA]"] option:selected').val();
  if (FCA_qty != "") {
    var FCA_full = $('select[name="seats[FCA]"] option:selected').data(
      "fullprice"
    );
    var FCA_disc = $('select[name="seats[FCA]"] option:selected').data(
      "discprice"
    );
    if (day_type == "disc") {
      var total = FCA_qty * FCA_disc;
      document.getElementById("fca_label").value = " Total: $" + total;
    } else {
      var total = FCA_qty * FCA_full;
      console.log(total);
      document.getElementById("fca_label").value = " Total: $" + total;
    }
  } else {
    document.getElementById("fca_label").value = "";
  }

  // FCP QTY
  var FCP_qty = $('select[name="seats[FCP]"] option:selected').val();
  if (FCP_qty != "") {
    var FCP_full = $('select[name="seats[FCP]"] option:selected').data(
      "fullprice"
    );
    var FCP_disc = $('select[name="seats[FCP]"] option:selected').data(
      "discprice"
    );
    if (day_type == "disc") {
      var total = FCP_qty * FCP_disc;
      document.getElementById("fcp_label").value = " Total: $" + total;
    } else {
      var total = FCP_qty * FCP_full;
      console.log(total);
      document.getElementById("fcp_label").value = " Total: $" + total;
    }
  } else {
    document.getElementById("fcp_label").value = "";
  }

  // FCC QTY
  var fcc_qty = $('select[name="seats[FCC]"] option:selected').val();
  if (fcc_qty != "") {
    var fcc_full = $('select[name="seats[FCC]"] option:selected').data(
      "fullprice"
    );
    var fcc_disc = $('select[name="seats[FCC]"] option:selected').data(
      "discprice"
    );
    if (day_type == "disc") {
      var total = fcc_qty * fcc_disc;
      document.getElementById("fcc_label").value = " Total: $" + total;
    } else {
      var total = fcc_qty * fcc_full;
      console.log(total);
      document.getElementById("fcc_label").value = " Total: $" + total;
    }
  } else {
    document.getElementById("fcc_label").value = "";
  }
}

$("select").change(() => {
  change();
});

$("input[type='radio'][name='DAY']").change(function () {
  change();
});

$("form").submit(function (e) {
  e.preventDefault();
  var valid = false;
  var check = 0;

  if ($('select[name="seats[STA]"] option:selected').val() != "") {
    valid = true;
    check = 1;
  } else if ($('select[name="seats[STP]"] option:selected').val() != "") {
    valid = true;
    check = 1;
  } else if ($('select[name="seats[STC]"] option:selected').val() != "") {
    valid = true;
    check = 1;
  } else if ($('select[name="seats[FCA]"] option:selected').val() != "") {
    valid = true;
    check = 1;
  } else if ($('select[name="seats[FCP]"] option:selected').val() != "") {
    valid = true;
    check = 1;
  } else if ($('select[name="seats[FCC]"] option:selected').val() != "") {
    valid = true;
    check = 1;
  }
  if ($("input[type='radio'][name='DAY']").is(":checked") && check == 1) {
    valid = true;
  } else {
    valid = false;
  }
  if (valid) {
    this.submit();
  } else if (check == 0) {
    alert("Select atleast 1 seat type");
  } else {
    alert("Select the day and time");
  }
});

window.onload = function () {
  change();
};
// 
