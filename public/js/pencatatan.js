document.getElementById('frontend').addEventListener('input', hitung);
document.getElementById('jumlahFrontend').addEventListener('input', hitung);
document.getElementById('uiux').addEventListener('input', hitung);
document.getElementById('jumlahUiux').addEventListener('input', hitung);
document.getElementById('backend').addEventListener('input', hitung);
document.getElementById('jumlahBackend').addEventListener('input', hitung);
document.getElementById('consultant_it').addEventListener('input', hitung);
document.getElementById('jumlahConsultantIt').addEventListener('input', hitung);
document.getElementById('transportasi').addEventListener('input', hitung);
document.getElementById('jumlahTransportasi').addEventListener('input', hitung);
document.getElementById('penginapan').addEventListener('input', hitung);
document.getElementById('jumlahPenginapan').addEventListener('input', hitung);
document.getElementById('konsumsi').addEventListener('input', hitung);
document.getElementById('jumlahKonsumsi').addEventListener('input', hitung);
document.getElementById('pajak').addEventListener('input', hitung);

function hitung() {
    var hargaFrontEnd = document.getElementById('frontend').value * document.getElementById('jumlahFrontend').value;
    var hargaUiux = document.getElementById('uiux').value * document.getElementById('jumlahUiux').value;
    var hargaBackEnd = document.getElementById('backend').value * document.getElementById('jumlahBackend').value;
    var hargaConsultantIt = document.getElementById('consultant_it').value * document.getElementById(
        'jumlahConsultantIt').value;
    var hargaTransportasi = document.getElementById('transportasi').value * document.getElementById(
        'jumlahTransportasi').value;
    var hargaPenginapan = document.getElementById('penginapan').value * document.getElementById('jumlahPenginapan')
        .value;
    var hargaKonsumsi = document.getElementById('konsumsi').value * document.getElementById('jumlahKonsumsi').value;
    var hargaPajak = document.getElementById('pajak').value / 100;

    
    document.getElementById('total').value = ((hargaFrontEnd + hargaUiux + hargaBackEnd + hargaConsultantIt +
        hargaTransportasi + hargaPenginapan + hargaKonsumsi) + (hargaPajak * (hargaFrontEnd + hargaUiux +
            hargaBackEnd + hargaConsultantIt + hargaTransportasi + hargaPenginapan + hargaKonsumsi)));
}
// Ambil elemen-elemen yang diperlukan
var addAccountPopup = document.getElementById('addAccountPopup');
var openAddAccountPopup = document.getElementById('openAddAccountPopup');
var closeAddAccountPopup = document.getElementById('closeAddAccountPopup');

// Fungsi untuk membuka popup
openAddAccountPopup.addEventListener('click', function () {
    addAccountPopup.style.display = 'block';
});

// Fungsi untuk menutup popup
closeAddAccountPopup.addEventListener('click', function () {
    addAccountPopup.style.display = 'none';
});

// Jika pengguna mengklik di luar popup, tutup popup
window.addEventListener('click', function (event) {
    if (event.target == addAccountPopup) {
        addAccountPopup.style.display = 'none';
    }
});

const projectTableBody = document.getElementById('project-table-body');

// Function to display data in the table
function displayData(data) {
    const tableRow = document.createElement('tr');
    tableRow.innerHTML = `
      <td>${data.nama_project}</td>
      <td>${data.tanggal}</td>
      <td>${data.frontend} x ${data.jumlahFrontend} = ${data.frontend * data.jumlahFrontend}</td>
      <td>${data.uiux} x ${data.jumlahUiux} = ${data.uiux * data.jumlahUiux}</td>
      <td>${data.backend} x ${data.jumlahBackend} = ${data.backend * data.jumlahBackend}</td>
      <td>${data.consultant_it} x ${data.jumlahConsultantIt} = ${data.consultant_it * data.jumlahConsultantIt}</td>
      <td>${data.transportasi} x ${data.jumlahTransportasi} = ${data.transportasi * data.jumlahTransportasi}</td>
      <td>${data.penginapan} x ${data.jumlahPenginapan} = ${data.penginapan * data.jumlahPenginapan}</td>
      <td>${data.konsumsi} x ${data.jumlahKonsumsi} = ${data.konsumsi * data.jumlahKonsumsi}</td>
      <td>${data.total}</td>
      <td>${data.pajak}%</td>
    `;
    projectTableBody.appendChild(tableRow);
}

// Call the displayData function when the form is submitted
document.getElementById('addAccountForm').addEventListener('submit', function (event) {
    event.preventDefault();
    const formData = new FormData(event.target);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });
    displayData(data);
});