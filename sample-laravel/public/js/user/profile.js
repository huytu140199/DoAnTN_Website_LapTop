const city = $("#city");
const ward = $("#ward");
const district = $("#district");
city.html("<option value='0'>Chọn tỉnh/TP</option>");
ward.html("<option value='0'>Chọn quận/huyên</option>");
district.html("<option value='0'>Chọn xã</option>");

let codeWard = 0;
let wards = [];
let citys = [];
let districtss = [];
var wardShow = "";
var districtShow = "";

async function resData(url) {
    const response = await fetch(url);
    var data = await response.json();
    data.forEach((e) => {
        var cityShow = "";
        cityShow += `<option value=${e.code}> ${e.name}</option>`;
        city.append(cityShow);
    });
    citys = new Array(data);
}
const uri = "https://provinces.open-api.vn/api/?depth=3";

$(city).click(() => resData(uri));

let codeCity = 1;
$(city).change(() => {
    codeCity = $(city).val();
    citys[0].forEach((e) => {
        if (e.code == codeCity) {
            wards = e.districts;
            wardShow = "";
            districtShow = "";
        }
    });
    wards.forEach((e) => {
        wardShow += `<option value=${e.code}> ${e.name}</option>`;
    });
    ward.html(wardShow);
});

$(ward).change(() => {
    codeWard = $(ward).val();
    wards.forEach((e) => {
        if (e.code == codeWard) {
            districtss = e.wards;
            districtShow = "";
        }
    });
    districtss.forEach((e) => {
        districtShow += `<option value=${e.code}> ${e.name}</option>`;
    });
    district.html(districtShow);
});

//
$(document).ready(function () {


    var readURL = function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    $(".file-upload").on('change', function () {
        readURL(this);
    });

    $(".upload-button").on('click', function () {
        $(".file-upload").click();
    });
});

const payProductButton = $(".btn-profile");


const btnOrder = $(".btn-profile");

btnOrder.click((e) => {
    let err = false;
    // e.preventDefault();


    if (err) {
        e.preventDefault();
        return;
    }

    // alert(`Thank you, ${$("#namePay").val()}`);

    // name.val("");
});
