<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adorable Projects</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            min-height: 100%;
        }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            background-color: #888;
            padding: 40px 20px 60px;
        }

        .card {
            width: 100%;
            max-width: 580px;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.25);
        }

        .top-border {
            height: 40px;
            background: #16a34a;
            border-radius: 24px 24px 0 0;
        }

        .card-content {
            padding: 12px 20px 60px;
            text-align: center;
            position: relative;
            background-color: #eef3ec;
            background-image: url("https://ugc.production.linktr.ee/IDYHI1RNSv6TIz2Yzzkc_78UNA0FLDCU37Zwl?io=true&size=1080");
            background-size: contain;
            background-position: center top;
            background-repeat: repeat-y;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 4px 0 16px;
            background: transparent;
        }

        .card-header button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            cursor: pointer;
            transition: background 0.2s;
            color: #000;
        }

        .card-header button:hover {
            background: rgba(255, 255, 255, 1);
        }

        .profile-img {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.15);
            background: #eee;
            position: relative;
            z-index: 2;
        }

        h1 {
            margin: 14px 0 4px;
            color: #D27AAF;
            font-size: 26px;
            font-weight: 600;
        }

        .subtitle {
            margin: 2px 0;
            font-size: 16px;
            color: #D27AAF;
            font-weight: 600;
        }

        .links-section {
            margin-top: 24px;
        }

        .link {
            display: flex;
            align-items: center;
            justify-content: center;
            background:
                #0bab5d;
            color: white;
            text-decoration: none;
            padding: 0 16px;
            margin: 14px 0;
            border-radius: 0px;
            font-weight: 600;
            font-size: 15px;
            transition: background 0.2s, transform 0.1s;
            width: 100%;
            height: 56px;
            position: relative;
        }

        .link:hover {
            background: #1cb168;
        }

        .link:active {
            transform: scale(0.97);
        }

        .link-icon {
            position: absolute;
            left: 16px;
            width: 54px;
            height: 54px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 8px;
            font-size: 18px;
        }

        .link-label {
            flex: 1;
            text-align: center;
            letter-spacing: 0.3px;
        }

        .link-dots {
            position: absolute;
            right: 16px;
            width: 28px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            font-size: 16px;
            opacity: 0.6;
        }

        .socials {
            margin-top: 28px;
            margin-bottom: 81px;
            display: flex;
            justify-content: center;
            gap: 0px;
        }

        .socials a {
            text-decoration: none;
            font-size: 22px;
            color: #D27AAF;
            transition: color 0.2s;
        }

        .socials a:hover {
            color: #D27AAF;
        }

        footer {
            font-size: 10px;
            color: #333;
            background: #D27AAF;
            padding: 20px 20px 28px;
            text-align: center;
        }

        footer a,
        footer button {
            font-size: 10px;
            color: #333;
            background: none;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        footer a:hover,
        footer button:hover {
            text-decoration: underline;
        }

        footer span {
            color: #333;
            margin: 0 4px;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="top-border"></div>

        <div class="card-content">

            <div class="card-header">
                <button aria-label="Linktree">
                    <svg fill="none" height="18px" width="18px" viewBox="0 0 28 28">
                        <path
                            d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z"
                            fill="currentColor"></path>
                    </svg>
                </button>
                <button aria-label="Share profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z">
                        </path>
                    </svg>
                </button>
            </div>

            <img src="assets/img/profileap.png" alt="Profile" class="profile-img">
            <h1>Adorable Projects</h1>
            <p class="subtitle">Brand Lokal Indonesia. Asli Bandung.</p>
            <p class="subtitle">Produknya Handmade. Online dari tahun 2008.</p>

            <div class="links-section">
                <a href="https://adorableprojects.store/" target="_blank" rel="noopener noreferrer" class="link">
                    <span class="link-icon">
                        <img src="assets/img/logowebstore.png"
                            style="width:100%;height:100%;object-fit:contain;border-radius:4px;">
                    </span>
                    <span class="link-label">Official Webstore</span>
                    <span class="link-dots"><i class="fas fa-ellipsis-v"></i></span>
                </a>
                <a href="https://adorableprojects.store/customer-service" target="_blank" rel="noopener noreferrer"
                    class="link">
                    <span class="link-icon">
                        <img src="assets/img/contactcsr.png"
                            style="width:100%;height:100%;object-fit:contain;border-radius:4px;">
                    </span>
                    <span class="link-label">Contact CSR</span>
                    <span class="link-dots"><i class="fas fa-ellipsis-v"></i></span>
                </a>
                <a href="https://shopee.co.id/adorableproject" target="_blank" rel="noopener noreferrer" class="link">
                    <span class="link-icon">
                        <img src="assets/img/keranjang.png"
                            style="width:100%;height:100%;object-fit:contain;border-radius:4px;">
                    </span>
                    <span class="link-label">Official Shopee</span>
                    <span class="link-dots"><i class="fas fa-ellipsis-v"></i></span>
                </a>
                <a href="https://www.tiktok.com/@adorableprojectsofficial?_t=8e09q9n4wyk&_r=1" target="_blank"
                    rel="noopener noreferrer" class="link">
                    <span class="link-icon">
                        <img src="assets/img/keranjang.png"
                            style="width:100%;height:100%;object-fit:contain;border-radius:4px;">
                    </span>
                    <span class="link-label">TIKTOK SHOP</span>
                    <span class="link-dots"><i class="fas fa-ellipsis-v"></i></span>
                </a>
                <a href="https://www.tokopedia.com/adorableprojects" target="_blank" rel="noopener noreferrer"
                    class="link">
                    <span class="link-icon">
                        <img src="assets/img/keranjang.png"
                            style="width:100%;height:100%;object-fit:contain;border-radius:4px;">
                    </span>
                    <span class="link-label">TOKOPEDIA</span>
                    <span class="link-dots"><i class="fas fa-ellipsis-v"></i></span>
                </a>
                <a href="https://www.lazada.co.id/shop/adorable-projects/?path=promotion-439502-0.htm&tab=promotion"
                    target="_blank" rel="noopener noreferrer" class="link">
                    <span class="link-icon">
                        <img src="assets/img/keranjang.png"
                            style="width:100%;height:100%;object-fit:contain;border-radius:4px;">
                    </span>
                    <span class="link-label">LAZADA</span>
                    <span class="link-dots"><i class="fas fa-ellipsis-v"></i></span>
                </a>
                <a href="https://www.blibli.com/merchant/adorableprojects-official-store/ADS-70383?pickupPointCode=PP-3421070"
                    target="_blank" rel="noopener noreferrer" class="link">
                    <span class="link-icon">
                        <img src="assets/img/keranjang.png"
                            style="width:100%;height:100%;object-fit:contain;border-radius:4px;">
                    </span>
                    <span class="link-label">OFFICIAL BLIBLI</span>
                    <span class="link-dots"><i class="fas fa-ellipsis-v"></i></span>
                </a>
                <a href="https://www.zalora.co.id/store/adorableprojects" target="_blank" rel="noopener noreferrer"
                    class="link">
                    <span class="link-icon">
                        <img src="assets/img/logowebstore.png"
                            style="width:100%;height:100%;object-fit:contain;border-radius:4px;">
                    </span>
                    <span class="link-label">ZALORA INDONESIA</span>
                    <span class="link-dots"><i class="fas fa-ellipsis-v"></i></span>
                </a>
                <a href="https://www.google.com/maps/place/AdorableProjects/@-6.8630721,107.543594,15z/data=!4m2!3m1!1s0x0:0x922f1667a6b5cf0a?sa=X&ved=2ahUKEwiWnO6rkMzrAhXZR30KHfH1D24Q_BIwFnoECBIQCA"
                    target="_blank" rel="noopener noreferrer" class="link">
                    <span class="link-icon">
                        <img src="assets/img/maps.png"
                            style="width:100%;height:100%;object-fit:contain;border-radius:4px;">
                    </span>
                    <span class="link-label">Warehouse Maps</span>
                    <span class="link-dots"><i class="fas fa-ellipsis-v"></i></span>
                </a>
            </div>

            <div class="socials">
                <!-- Facebook -->
                <button type="button"
                    style="background:transparent;border:0;cursor:pointer;padding:8px;color:#D27AAF;transition:transform 0.2s;"
                    onmouseover="this.style.transform='scale(1.075)'" onmouseout="this.style.transform='scale(1)'">
                    <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                        <path
                            d="M23 12C23 5.92487 18.0751 0.999996 12 0.999996C5.92488 0.999996 1 5.92487 1 12C1 17.1588 4.55146 21.4874 9.34266 22.6761V15.3614H7.07438V12H9.34266V10.5516C9.34266 6.80751 11.037 5.07215 14.7128 5.07215C15.4096 5.07215 16.6121 5.20877 17.104 5.34544V8.39261C16.8444 8.36529 16.3935 8.3516 15.8332 8.3516C14.0295 8.3516 13.3326 9.03484 13.3326 10.8112V12H16.9256L16.3084 15.3614H13.3326V22.9194C18.7792 22.2616 23 17.624 23 12Z">
                        </path>
                    </svg>
                </button>
                <!-- Instagram -->
                <button type="button"
                    style="background:transparent;border:0;cursor:pointer;padding:8px;color:#D27AAF;transition:transform 0.2s;"
                    onmouseover="this.style.transform='scale(1.075)'" onmouseout="this.style.transform='scale(1)'">
                    <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                        <path
                            d="M12 2C9.2912 2 8.94131 2 7.86907 2.05643C7.03985 2.07241 6.21934 2.22888 5.44244 2.51919C4.78781 2.77878 4.23476 3.11738 3.67043 3.68172C3.11738 4.23476 2.76749 4.78781 2.51919 5.45372C2.27088 6.08578 2.10158 6.80813 2.05643 7.88036C2.01129 8.94131 2 9.27991 2 12C2 14.7088 2 15.0474 2.05643 16.1196C2.10158 17.1919 2.28217 17.9255 2.51919 18.5576C2.77878 19.2122 3.11738 19.7652 3.67043 20.3296C4.23476 20.8826 4.78781 21.2325 5.44244 21.4808C6.08578 21.7291 6.80813 21.8984 7.86907 21.9436C8.94131 21.9887 9.27991 22 12 22C14.7088 22 15.0474 22 16.1196 21.9436C17.1806 21.8984 17.9142 21.7178 18.5463 21.4808C19.2137 21.2306 19.8184 20.8377 20.3183 20.3296C20.8826 19.7652 21.2212 19.2009 21.4695 18.5576C21.7178 17.9142 21.8871 17.1919 21.9436 16.1196C21.9887 15.0587 22 14.7201 22 12C22 9.2912 21.9887 8.9526 21.9436 7.88036C21.9225 7.05065 21.7622 6.23037 21.4695 5.45372C21.2189 4.78649 20.8261 4.18182 20.3183 3.68172C19.754 3.11738 19.2122 2.77878 18.5463 2.51919C17.7686 2.23315 16.9482 2.08051 16.1196 2.06772C15.0474 2.01129 14.7088 2 12 2ZM11.0971 3.80587H12C14.6637 3.80587 14.9797 3.80587 16.0406 3.8623C16.6724 3.8686 17.2985 3.98313 17.8916 4.2009C18.3657 4.38149 18.693 4.59594 19.0429 4.94582C19.3928 5.29571 19.6072 5.63431 19.7991 6.09706C19.9345 6.45824 20.0925 6.97743 20.1377 7.95937C20.1828 9.00903 20.1941 9.32506 20.1941 12C20.1941 14.6637 20.1941 14.9797 20.1377 16.0406C20.1314 16.6724 20.0169 17.2985 19.7991 17.8916C19.6185 18.3657 19.3928 18.693 19.0429 19.0429C18.7043 19.3928 18.3657 19.6072 17.8916 19.7878C17.2992 20.0094 16.6731 20.1278 16.0406 20.1377C14.9797 20.1828 14.6637 20.1941 12 20.1941C9.32506 20.1941 9.00903 20.1941 7.95937 20.1377C7.3238 20.1322 6.69388 20.0177 6.09706 19.7991C5.63431 19.6072 5.307 19.3928 4.94582 19.0429C4.60722 18.7043 4.38149 18.3657 4.2009 17.8916C3.98313 17.2985 3.8686 16.6724 3.8623 16.0406C3.80587 14.9797 3.79458 14.6637 3.79458 12C3.79458 9.32506 3.80587 9.00903 3.85102 7.95937C3.85602 7.32375 3.97057 6.69376 4.18962 6.09706C4.38149 5.63431 4.59594 5.307 4.94582 4.94582C5.29571 4.60722 5.62302 4.38149 6.09706 4.2009C6.69376 3.98185 7.32375 3.86731 7.95937 3.8623C8.87359 3.81716 9.23476 3.80587 11.0971 3.79458V3.80587ZM17.3386 5.46501C17.1815 5.46501 17.0259 5.49596 16.8808 5.55608C16.7356 5.6162 16.6037 5.70433 16.4926 5.81542C16.3815 5.92652 16.2934 6.05841 16.2333 6.20356C16.1732 6.34871 16.1422 6.50429 16.1422 6.6614C16.1422 6.81851 16.1732 6.97408 16.2333 7.11924C16.2934 7.26439 16.3815 7.39628 16.4926 7.50737C16.6037 7.61847 16.7356 7.70659 16.8808 7.76672C17.0259 7.82684 17.1815 7.85779 17.3386 7.85779C17.6559 7.85779 17.9602 7.73174 18.1846 7.50737C18.4089 7.28301 18.535 6.9787 18.535 6.6614C18.535 6.3441 18.4089 6.03979 18.1846 5.81542C17.9602 5.59106 17.6559 5.46501 17.3386 5.46501ZM12 6.86456C11.3256 6.86456 10.6578 6.99739 10.0348 7.25547C9.41169 7.51355 8.84556 7.89182 8.36869 8.36869C7.89182 8.84556 7.51355 9.41169 7.25547 10.0348C6.99739 10.6578 6.86456 11.3256 6.86456 12C6.86456 12.6744 6.99739 13.3422 7.25547 13.9652C7.51355 14.5883 7.89182 15.1544 8.36869 15.6313C8.84556 16.1082 9.41169 16.4864 10.0348 16.7445C10.6578 17.0026 11.3256 17.1354 12 17.1354C13.362 17.1354 14.6682 16.5944 15.6313 15.6313C16.5944 14.6682 17.1354 13.362 17.1354 12C17.1354 10.638 16.5944 9.33178 15.6313 8.36869C14.6682 7.40561 13.362 6.86456 12 6.86456ZM12 8.67043C12.4372 8.67043 12.8702 8.75655 13.2742 8.92388C13.6781 9.0912 14.0452 9.33646 14.3544 9.64564C14.6635 9.95482 14.9088 10.3219 15.0761 10.7258C15.2434 11.1298 15.3296 11.5628 15.3296 12C15.3296 12.4372 15.2434 12.8702 15.0761 13.2742C14.9088 13.6781 14.6635 14.0452 14.3544 14.3544C14.0452 14.6635 13.6781 14.9088 13.2742 15.0761C12.8702 15.2434 12.4372 15.3296 12 15.3296C11.1169 15.3296 10.2701 14.9788 9.64564 14.3544C9.02122 13.7299 8.67043 12.8831 8.67043 12C8.67043 11.1169 9.02122 10.2701 9.64564 9.64564C10.2701 9.02122 11.1169 8.67043 12 8.67043Z">
                        </path>
                    </svg>
                </button>
                <!-- TikTok -->
                <button type="button"
                    style="background:transparent;border:0;cursor:pointer;padding:8px;color:#D27AAF;transition:transform 0.2s;"
                    onmouseover="this.style.transform='scale(1.075)'" onmouseout="this.style.transform='scale(1)'">
                    <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                        <path
                            d="M15.9453 8.68918V15.6727C15.9453 19.1598 13.1048 22.0004 9.6177 22.0004C8.27369 22.0004 7.01685 21.5717 5.99251 20.8525C4.35796 19.7047 3.29004 17.8085 3.29004 15.6727C3.29004 12.1783 6.12333 9.34505 9.6104 9.34505C9.90101 9.34505 10.1843 9.36685 10.4676 9.40318V12.9121H10.4386C10.3151 12.8758 10.1843 12.8394 10.0536 12.8177H9.9954C9.86466 12.8032 9.74114 12.7813 9.60309 12.7813C8.00491 12.7813 6.70448 14.0817 6.70448 15.6799C6.70448 17.2782 8.00491 18.5786 9.60309 18.5786C11.2014 18.5786 12.5018 17.2782 12.5018 15.6799V2.00037H15.938C15.938 2.29822 15.9671 2.58881 16.0179 2.87213C16.2649 4.1798 17.035 5.30584 18.1175 6.01053C18.873 6.50452 19.7593 6.78785 20.7182 6.78785V10.2241C18.9416 10.2241 17.288 9.65222 15.9453 8.68918Z">
                        </path>
                    </svg>
                </button>
                <!-- Spotify -->
                <button type="button"
                    style="background:transparent;border:0;cursor:pointer;padding:8px;color:#D27AAF;transition:transform 0.2s;"
                    onmouseover="this.style.transform='scale(1.075)'" onmouseout="this.style.transform='scale(1)'">
                    <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                        <path
                            d="M11.9999 1.00049C5.92497 1.00049 1 5.92532 1 12.0003C1 18.0755 5.92497 23 11.9999 23C18.0756 23 23 18.0755 23 12.0003C23 5.92572 18.0756 1.00101 11.9998 1.00101L11.9999 1.00049ZM17.0444 16.8654C16.8474 17.1885 16.4244 17.2909 16.1013 17.0926C13.5186 15.515 10.2674 15.1578 6.43843 16.0326C6.06946 16.1166 5.70167 15.8855 5.6176 15.5164C5.53314 15.1473 5.7634 14.7795 6.13329 14.6954C10.3235 13.7381 13.9177 14.1503 16.8172 15.9222C17.1403 16.1206 17.2428 16.5422 17.0444 16.8654ZM18.3908 13.8702C18.1425 14.2738 17.6145 14.4012 17.2113 14.1529C14.2545 12.3355 9.74735 11.8092 6.25007 12.8708C5.7965 13.0078 5.31746 12.7522 5.1798 12.2994C5.04319 11.8458 5.29894 11.3677 5.75171 11.2298C9.74657 10.0176 14.7129 10.6048 18.1084 12.6913C18.5117 12.9396 18.6391 13.4675 18.3908 13.8702ZM18.5064 10.7514C14.9612 8.64566 9.112 8.45204 5.72715 9.47936C5.18361 9.6442 4.60881 9.33736 4.44409 8.79382C4.27937 8.25002 4.58595 7.67561 5.12988 7.51037C9.01545 6.33081 15.4748 6.55871 19.5564 8.98179C20.0464 9.27195 20.2066 9.90337 19.9163 10.3916C19.6274 10.8805 18.9942 11.0417 18.5069 10.7514H18.5064Z">
                        </path>
                    </svg>
                </button>
                <!-- YouTube -->
                <button type="button"
                    style="background:transparent;border:0;cursor:pointer;padding:8px;color:#D27AAF;transition:transform 0.2s;"
                    onmouseover="this.style.transform='scale(1.075)'" onmouseout="this.style.transform='scale(1)'">
                    <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.8142 5.41679C20.6763 5.64906 21.3541 6.32675 21.5832 7.18581C22 8.74483 22 11.9997 22 11.9997C22 11.9997 22 15.2545 21.5832 16.8136C21.3509 17.6757 20.6733 18.3535 19.8142 18.5825C18.2551 18.9993 12 18.9993 12 18.9993C12 18.9993 5.74801 18.9993 4.18581 18.5825C3.32358 18.3502 2.64588 17.6726 2.4168 16.8136C2 15.2545 2 11.9997 2 11.9997C2 11.9997 2 8.74483 2.4168 7.18581C2.64907 6.32358 3.32676 5.64588 4.18581 5.41679C5.74801 5 12 5 12 5C12 5 18.2551 5 19.8142 5.41679ZM15.1961 11.9992L10.0004 14.9994V8.99883L15.1961 11.9992Z">
                        </path>
                    </svg>
                </button>
                <!-- Email -->
                <button type="button"
                    style="background:transparent;border:0;cursor:pointer;padding:8px;color:#D27AAF;transition:transform 0.2s;"
                    onmouseover="this.style.transform='scale(1.075)'" onmouseout="this.style.transform='scale(1)'">
                    <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                        <path
                            d="M4.30606 7.28017C4.14002 7.62375 4.06901 7.99473 4.03469 8.4148C3.99999 8.83953 3.99999 9.36401 4 10.0143V13.9857C3.99999 14.6359 3.99999 15.1604 4.03469 15.5852C4.07042 16.0225 4.14591 16.4066 4.32698 16.7619C4.6146 17.3264 5.07354 17.7854 5.63803 18.073C5.9934 18.2541 6.37752 18.3296 6.81483 18.3653C7.23955 18.4 7.76404 18.4 8.4143 18.4H15.5857C16.236 18.4 16.7605 18.4 17.1852 18.3653C17.6225 18.3296 18.0066 18.2541 18.362 18.073C18.9265 17.7854 19.3854 17.3264 19.673 16.7619C19.8541 16.4066 19.9296 16.0225 19.9653 15.5852C20 15.1604 20 14.6359 20 13.9857V10.0143C20 9.36401 20 8.83953 19.9653 8.4148C19.931 7.99473 19.86 7.62375 19.6939 7.28017L13.8997 12.0209C12.7946 12.9251 11.2054 12.9251 10.1003 12.0209L4.30606 7.28017Z">
                        </path>
                        <path
                            d="M18.9609 6.3295C18.7792 6.17262 18.5783 6.0372 18.362 5.92696C18.0066 5.74588 17.6225 5.6704 17.1852 5.63467C16.7605 5.59997 16.236 5.59997 15.5857 5.59998H8.41432C7.76406 5.59997 7.23955 5.59997 6.81483 5.63467C6.37752 5.6704 5.9934 5.74588 5.63803 5.92696C5.42166 6.0372 5.2208 6.17262 5.03915 6.3295L10.8602 11.0922C11.5232 11.6347 12.4768 11.6347 13.1398 11.0922L18.9609 6.3295Z">
                        </path>
                    </svg>
                </button>
                <!-- X/Twitter -->
                <button type="button"
                    style="background:transparent;border:0;cursor:pointer;padding:8px;color:#D27AAF;transition:transform 0.2s;"
                    onmouseover="this.style.transform='scale(1.075)'" onmouseout="this.style.transform='scale(1)'">
                    <svg fill="currentColor" width="32" height="32" viewBox="0 0 24 24">
                        <path
                            d="M17.8048 2.96973H20.8705L14.1394 10.6338L22.0034 21.0304H15.8321L11.0004 14.7125L5.46893 21.0304H2.40328L9.53424 12.8331L2.00342 2.96973H8.32798L12.6932 8.74114L17.8048 2.96973ZM16.7318 19.231H18.4313L7.43494 4.70248H5.60888L16.7318 19.231Z">
                        </path>
                    </svg>
                </button>
            </div>

        </div>

        <footer>
            <button>Cookie Preferences</button>
            <span>•</span>
            <a href="https://adorableprojects.store/"
                target="_blank" rel="noopener noreferrer">Report</a>
            <span>•</span>
            <a href="https://adorableprojects.store/" target="_blank" rel="noopener noreferrer">Privacy</a>
            <span>•</span>
            <button>Explore</button>
        </footer>

    </div>
</body>

</html>
