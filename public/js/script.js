// Showing Calendar

let today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();
let selectYear = document.getElementById("year");
let selectMonth = document.getElementById("month");
let months = [
  "Januari",
  "Februari",
  "Maret",
  "April",
  "Mei",
  "Juni",
  "Juli",
  "Agustus",
  "September",
  "Oktober",
  "November",
  "Desember",
];

let monthAndYear = document.querySelector(".month-name");

showCalendar(currentMonth, currentYear);

function next() {
  currentYear = currentMonth === 11 ? currentYear + 1 : currentYear;
  currentMonth = (currentMonth + 1) % 12;
  showCalendar(currentMonth, currentYear);
}

function previous() {
  currentYear = currentMonth === 0 ? currentYear - 1 : currentYear;
  currentMonth = currentMonth === 0 ? 11 : currentMonth - 1;
  showCalendar(currentMonth, currentYear);
}

function showCalendar(month, year) {
  let firstDay = new Date(year, month).getDay();
  let monthBefore = new Date(year, month === 0 ? 11 : month - 1).getMonth();
  let daysInMonthBefore = 32 - new Date(year, monthBefore, 32).getDate();
  let dateBefore = daysInMonthBefore - firstDay + 1;

  let daysInMonth = 32 - new Date(year, month, 32).getDate();
  let tbl = document.querySelector(".calendar-body"); // body of the calendar
  // Menghapus baris sebelumnya
  tbl.innerHTML = "";
  // Memberi bulan dan tahun pada header
  monthAndYear.innerHTML = months[month] + " " + year;
  // creating all cells
  let date = 1;
  for (let i = 0; i < 6; i++) {
    // Membuat baris tabel
    let row = document.createElement("tr");

    //  Membuat kolom dan mengisinya dengan tanggal
    for (let j = 0; j < 7; j++) {
      // Input tanggal pada bulan sebelumnya ke dalam cell yang kosong
      if (i === 0 && j < firstDay) {
        let cell = document.createElement("td");
        let cellText = document.createTextNode(dateBefore);
        cell.style.color = "gray";
        cell.append(cellText);
        row.appendChild(cell);
        dateBefore++;
      } else if (date > daysInMonth) {
        break;
      } else {
        let cell = document.createElement("td");
        let cellText = document.createTextNode(date);
        if (
          date === today.getDate() &&
          year === today.getFullYear() &&
          month === today.getMonth()
        ) {
          cell.classList.add("today");
        } // Memberikan warna untuk tanggal hari ini
        cell.appendChild(cellText);
        row.appendChild(cell);
        date++;
      }
    }
    tbl.appendChild(row); // Memasukan row ke dalam tbody
  }
}
