<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Coming Soon</title>
    <style>
        :root {
            --bg: #03251e;
            --card: #0f172a;
            --accent: #7c3aed;
            --muted: #9aa4b2;
            --glass: rgba(255, 255, 255, 0.03);
            --glass-2: rgba(255, 255, 255, 0.02);
        }

        html,
        body {
            height: 100%;
            margin: 0;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background: var(--bg);
            color: white;
            display: flex;
            flex-direction: column;
        }

        body {
            justify-content: center;
            align-items: center;
            padding: 24px;
        }

        /* 🔹 Logo fix top */
        .logo {
            position: fixed;
            top: 80px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            text-align: center;
        }

        .logo img {
            max-width: 700px;
            height: auto;
        }

        .wrap {
            width: 100%;
            max-width: 920px;
            background: white;
            border-radius: 18px;
            padding: 36px;
            box-shadow: 0 8px 30px rgba(2, 6, 23, 0.7);
            backdrop-filter: blur(6px);
            text-align: center;
            margin-top: 380px;
            /* space for logo */
        }

        h1 {
            margin: 0;
            font-size: clamp(22px, 5vw, 42px);
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #03251e;
        }

        .countdown {
            display: flex;
            gap: 12px;
            justify-content: center;
            align-items: center;
            margin-top: 18px;
            flex-wrap: wrap;
        }

        .unit {
            flex: 1 1 90px;
            max-width: 120px;
            background: linear-gradient(180deg, var(--glass), var(--glass-2));
            border-radius: 12px;
            padding: 12px 8px;
            text-align: center;
            border: 1px solid #03251e;
        }

        .value {
            font-size: clamp(18px, 4vw, 32px);
            font-weight: 700;
            color: #03251e;
        }

        .label {
            margin-top: 6px;
            color: #03251e;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* 🔹 Footer */
        footer {
            margin-top: auto;
            text-align: center;
            padding: 16px;
            font-size: 14px;
            color: var(--muted);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            width: 100%;
        }

        /* 🔹 Mobile View Fix */
        @media (max-width:700px) {
            .logo img {
                max-width: 460px;
            }

            .wrap {
                padding: 10px;
                margin-top: 310px;
            }

            .countdown {
                gap: 8px;
            }

            .unit {
                flex: 1 1 70px;
                padding: 10px 6px;
            }

            .value {
                font-size: 18px;
            }

            footer {
                font-size: 12px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>

    <!-- 🔹 Logo Top Fixed -->
    <div class="logo">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
    </div>

    <div class="wrap">
        <h1>Coming Soon</h1>
        <div class="countdown" id="countdown">
            <div class="unit">
                <div class="value" id="days">--</div>
                <div class="label">Days</div>
            </div>
            <div class="unit">
                <div class="value" id="hours">--</div>
                <div class="label">Hours</div>
            </div>
            <div class="unit">
                <div class="value" id="minutes">--</div>
                <div class="label">Minutes</div>
            </div>
            <div class="unit">
                <div class="value" id="seconds">--</div>
                <div class="label">Seconds</div>
            </div>
        </div>
    </div>

    <!-- 🔹 Footer -->
    <footer>
        © 2025 {{ $comp_title }}. All rights reserved.</a>
    </footer>

    <script>
        const target = new Date('2025-10-02T00:00:00+05:30');

        const daysEl = document.getElementById('days');
        const hoursEl = document.getElementById('hours');
        const minutesEl = document.getElementById('minutes');
        const secondsEl = document.getElementById('seconds');

        function pad(n) {
            return String(n).padStart(2, '0');
        }

        function update() {
            const now = new Date();
            let diff = target - now;

            if (diff <= 0) {
                daysEl.textContent = hoursEl.textContent = minutesEl.textContent = secondsEl.textContent = '00';
                return;
            }

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
            const minutes = Math.floor((diff / (1000 * 60)) % 60);
            const seconds = Math.floor((diff / 1000) % 60);

            daysEl.textContent = days;
            hoursEl.textContent = pad(hours);
            minutesEl.textContent = pad(minutes);
            secondsEl.textContent = pad(seconds);
        }

        setInterval(update, 1000);
        update();
    </script>
</body>

</html>
