<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
@yield('title','Portal Admin SuraSunda')
</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

/* ========================================
   RESET
======================================== */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html,
body {
    width: 100%;
    min-height: 100%;
}

body {
    background: #f5f7fb;
    font-family: "Segoe UI", sans-serif;
    overflow-x: hidden;
}


/* ========================================
   SIDEBAR
======================================== */

.sidebar {
    width: 260px;
    height: 100vh;

    position: fixed;
    left: 0;
    top: 0;

    background: #166534;
    color: white;

    z-index: 1050;

    overflow-y: auto;

    transition: transform .3s ease;
}

.sidebar h3 {
    padding: 25px;

    text-align: center;

    font-weight: bold;

    border-bottom: 1px solid rgba(255,255,255,.15);
}

.sidebar a {
    display: block;

    color: white;
    text-decoration: none;

    padding: 15px 25px;

    transition: background .2s ease;
}

.sidebar a:hover {
    background: #15803d;
}

.sidebar button {
    width: 100%;

    background: none;
    border: none;

    color: white;

    text-align: left;

    padding: 15px 25px;

    cursor: pointer;
}

.sidebar button:hover {
    background: #15803d;
}


/* ========================================
   OVERLAY MOBILE
======================================== */

.sidebar-overlay {
    display: none;

    position: fixed;

    inset: 0;

    background: rgba(0,0,0,.4);

    z-index: 1040;
}

.sidebar-overlay.active {
    display: block;
}


/* ========================================
   CONTENT
======================================== */

.content {
    margin-left: 260px;

    padding: 30px;

    width: calc(100% - 260px);

    min-height: 100vh;
}


/* ========================================
   TOPBAR
======================================== */

.topbar {
    background: white;

    border-radius: 12px;

    padding: 18px 25px;

    margin-bottom: 25px;

    display: flex;

    justify-content: space-between;

    align-items: center;

    gap: 15px;

    box-shadow: 0 2px 10px rgba(0,0,0,.08);
}

.topbar h4 {
    margin: 0;

    font-size: 20px;

    font-weight: 600;
}


/* ========================================
   MOBILE MENU BUTTON
======================================== */

.mobile-menu-btn {
    display: none;

    border: none;

    background: #166534;

    color: white;

    width: 42px;
    height: 42px;

    border-radius: 8px;

    font-size: 21px;

    align-items: center;
    justify-content: center;

    cursor: pointer;
}

.mobile-menu-btn:hover {
    background: #15803d;
}


/* ========================================
   DASHBOARD CARD
======================================== */

.card-dashboard {
    border: none;

    border-radius: 15px;

    box-shadow: 0 2px 10px rgba(0,0,0,.08);
}


/* ========================================
   NOTIFICATION
======================================== */

.notification-item {
    padding: 12px;

    border-bottom: 1px solid #eee;
}

.notification-item:hover {
    background: #f5f5f5;
}


/* ========================================
   ADMIN BUTTON
======================================== */

.btn-admin {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    gap: 6px;

    padding: 8px 14px;

    border: none;

    border-radius: 8px;

    font-size: 13px;

    font-weight: 600;

    text-decoration: none;

    cursor: pointer;

    transition: all .2s ease;
}

.btn-admin:hover {
    transform: translateY(-1px);

    box-shadow: 0 3px 8px rgba(0,0,0,.12);
}

.btn-admin-primary {
    background: #16803d;
    color: white;
}

.btn-admin-primary:hover {
    background: #166534;
    color: white;
}

.btn-admin-edit {
    background: #2563eb;
    color: white;
}

.btn-admin-edit:hover {
    background: #1d4ed8;
    color: white;
}

.btn-admin-danger {
    background: #dc3545;
    color: white;
}

.btn-admin-danger:hover {
    background: #b91c1c;
    color: white;
}

.btn-admin-secondary {
    background: #e5e7eb;
    color: #374151;
}

.btn-admin-secondary:hover {
    background: #d1d5db;
    color: #1f2937;
}


/* ========================================
   TABLE RESPONSIVE
======================================== */

.table-responsive {
    width: 100%;

    overflow-x: auto;

    -webkit-overflow-scrolling: touch;
}


/* ========================================
   TABLET
======================================== */

@media (max-width: 991px) {

    .sidebar {
        width: 230px;
    }

    .content {
        margin-left: 230px;

        width: calc(100% - 230px);

        padding: 20px;
    }

    .topbar {
        padding: 15px 20px;
    }

}


/* ========================================
   SMARTPHONE
======================================== */

@media (max-width: 767px) {

    /* SIDEBAR */

    .sidebar {
        width: 260px;

        transform: translateX(-100%);
    }

    .sidebar.active {
        transform: translateX(0);
    }


    /* CONTENT */

    .content {
        margin-left: 0;

        width: 100%;

        padding: 12px;
    }


    /* TOPBAR */

    .topbar {
        padding: 12px 14px;

        margin-bottom: 15px;

        border-radius: 10px;
    }


    .topbar h4 {
        font-size: 17px;
    }


    /* MOBILE BUTTON */

    .mobile-menu-btn {
        display: inline-flex;
    }


    /* TOPBAR LEFT */

    .topbar > div:first-child {
        display: flex;

        align-items: center;

        gap: 10px;

        min-width: 0;
    }


    /* TOPBAR RIGHT */

    .topbar > div:last-child {
        gap: 8px !important;
    }


    /* USER NAME */

    .topbar > div:last-child > div:last-child {
        max-width: 90px;

        overflow: hidden;

        text-overflow: ellipsis;

        white-space: nowrap;

        font-size: 13px;
    }


    /* NOTIFICATION */

    .dropdown-menu {
        width: calc(100vw - 24px) !important;

        max-width: 350px;

        max-height: 70vh !important;
    }


    /* CARD */

    .card-dashboard {
        margin-bottom: 15px;
    }


    /* BUTTON */

    .btn-admin {
        margin-bottom: 5px;
    }


    /* TABLE */

    .table-responsive {
        width: 100%;

        overflow-x: auto;
    }


    .table {
        min-width: 650px;
    }


    /* HEADINGS */

    h1 {
        font-size: 24px;
    }

    h2 {
        font-size: 21px;
    }

    h3 {
        font-size: 19px;
    }

    h4 {
        font-size: 18px;
    }


    /* FORM */

    input,
    textarea,
    select {
        max-width: 100%;
    }


    /* BOOTSTRAP ROW */

    .row {
        --bs-gutter-x: 1rem;
    }

}


/* ========================================
   SMALL PHONE
======================================== */

@media (max-width: 400px) {

    .content {
        padding: 10px;
    }

    .topbar {
        padding: 10px;
    }

    .topbar h4 {
        font-size: 16px;
    }

    .mobile-menu-btn {
        width: 38px;
        height: 38px;

        font-size: 18px;
    }

}

</style>

</head>


<body>


<!-- ========================================
     SIDEBAR
======================================== -->

<div class="sidebar" id="adminSidebar">

    <h3>
        SuraSunda Admin
    </h3>


    <a href="{{ route('admin.dashboard') }}">
        📊 Dashboard
    </a>


    <a href="{{ route('admin.materials.index') }}">
        📚 Kelola Materi
    </a>


    <a href="{{ route('admin.questions.index') }}">
        ❓ Kelola Soal
    </a>


    <a href="{{ route('admin.students.index') }}">
        👨‍🎓 Data Siswa
    </a>


    <a href="{{ route('admin.quiz-results.index') }}">
        📈 Hasil Kuis
    </a>


    <a href="{{ route('admin.activities.index') }}">
        📋 Aktivitas Siswa
    </a>


    <form action="{{ route('logout') }}" method="POST">

        @csrf

        <button type="submit">
            🚪 Logout
        </button>

    </form>

</div>


<!-- ========================================
     MOBILE OVERLAY
======================================== -->

<div
    class="sidebar-overlay"
    id="sidebarOverlay"
    onclick="closeSidebar()">
</div>


<!-- ========================================
     CONTENT
======================================== -->

<div class="content">


    <!-- TOPBAR -->

    <div class="topbar">


        <div>

            <button
                type="button"
                class="mobile-menu-btn"
                onclick="toggleSidebar()">

                ☰

            </button>


            <h4>
                @yield('page-title')
            </h4>

        </div>


        <div class="d-flex align-items-center gap-3">


            <!-- NOTIFICATION -->

            <div class="dropdown">


                <button
                    class="btn btn-light position-relative"
                    data-bs-toggle="dropdown">

                    🔔

                    <span
                        id="notification-count"
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                        style="display:none">

                        0

                    </span>

                </button>


                <div
                    class="dropdown-menu dropdown-menu-end"
                    style="width:350px; max-height:400px; overflow:auto;">

                    <div class="p-3 border-bottom">

                        <strong>
                            Aktivitas Siswa
                        </strong>

                    </div>


                    <div id="notification-list">

                        <div class="p-3 text-muted text-center">

                            Belum ada aktivitas

                        </div>

                    </div>

                </div>

            </div>


            <!-- USER -->

            <div>

                {{ auth()->user()->name }}

            </div>


        </div>

    </div>


    <!-- PAGE CONTENT -->

    @yield('content')


</div>


<!-- BOOTSTRAP -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>

/* ========================================
   SIDEBAR MOBILE
======================================== */

function toggleSidebar() {

    document
        .getElementById('adminSidebar')
        .classList.toggle('active');

    document
        .getElementById('sidebarOverlay')
        .classList.toggle('active');

}


function closeSidebar() {

    document
        .getElementById('adminSidebar')
        .classList.remove('active');

    document
        .getElementById('sidebarOverlay')
        .classList.remove('active');

}


/* ========================================
   NOTIFICATION
======================================== */

let lastId = localStorage.getItem('lastActivityId') ?? 0;


function loadNotifications() {

    fetch("{{ route('admin.notifications') }}")

        .then(response => response.json())

        .then(data => {


            let list =
                document.getElementById('notification-list');

            let badge =
                document.getElementById('notification-count');


            list.innerHTML = "";


            if (data.length === 0) {

                list.innerHTML = `

                    <div class="p-3 text-muted text-center">

                        Belum ada aktivitas

                    </div>

                `;

                badge.style.display = "none";

                return;

            }


            data.forEach(item => {

                list.innerHTML += `

                    <div class="notification-item">

                        <strong>

                            ${item.student}

                        </strong>

                        <br>

                        <span>

                            ${item.description}

                        </span>

                        <br>

                        <small class="text-muted">

                            ${item.time}

                        </small>

                    </div>

                `;

            });


            if (
                lastId != 0 &&
                data[0].id > lastId
            ) {

                badge.style.display = "inline-block";

                badge.innerHTML = data.length;


                // Bunyi notifikasi

                const audioContext =
                    new (
                        window.AudioContext ||
                        window.webkitAudioContext
                    )();


                function playTone(
                    frequency,
                    startTime,
                    duration,
                    volume
                ) {

                    const oscillator =
                        audioContext.createOscillator();

                    const gainNode =
                        audioContext.createGain();


                    oscillator.connect(gainNode);

                    gainNode.connect(
                        audioContext.destination
                    );


                    oscillator.type = "sine";


                    oscillator.frequency.setValueAtTime(
                        frequency,
                        audioContext.currentTime +
                        startTime
                    );


                    gainNode.gain.setValueAtTime(
                        volume,
                        audioContext.currentTime +
                        startTime
                    );


                    gainNode.gain.exponentialRampToValueAtTime(
                        0.001,
                        audioContext.currentTime +
                        startTime +
                        duration
                    );


                    oscillator.start(
                        audioContext.currentTime +
                        startTime
                    );


                    oscillator.stop(
                        audioContext.currentTime +
                        startTime +
                        duration
                    );

                }


                playTone(
                    880,
                    0,
                    0.35,
                    0.25
                );


                playTone(
                    1318,
                    0.12,
                    0.5,
                    0.18
                );

            }


            lastId = data[0].id;


            localStorage.setItem(
                'lastActivityId',
                lastId
            );

        })

        .catch(error => {

            console.log(error);

        });

}


/* LOAD NOTIFICATION */

loadNotifications();


/* UPDATE EVERY 3 SECOND */

setInterval(
    loadNotifications,
    3000
);

</script>


</body>

</html>