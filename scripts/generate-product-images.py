#!/usr/bin/env python3
"""
Generate ultra-high-quality transparent PNG and WebP assets matching the exact
8 manufacturer products uploaded by the user:
1. cctv_solution.png -> Hikvision dark corrosion-resistant bullet camera
2. access_controll_solution.png -> Hikvision biometric face & fingerprint terminal
3. comunication_solution.png -> PLANET IP phone + IPX-2100 PBX + VGW-800 gateway
4. smart_home_solution.png -> Smart home touch panel with rotary thermostat dial
5. Interactive_panels_solution.png -> Room 359 interactive conference scheduler panel
6. server_solution.png -> Dual enterprise 42U server racks with glowing LEDs
7. phycical_security_solution.png -> Hikvision ISD-SMG318LT-F walk-through metal detector
8. wifi_camera_solution.png -> Imou Cruiser Dual outdoor PTZ Wi-Fi camera
"""

import os
import subprocess
import shutil

OUTPUT_DIRS = [
    '/app/applet/frontend/assets/products',
    '/app/applet/camnex-theme/assets/products'
]

def render_svg_to_png_and_webp(svg_content, base_name, alt_name, width=600, height=600):
    tmp_svg = f'/tmp/{base_name}.svg'
    tmp_png = f'/tmp/{base_name}.png'
    tmp_webp = f'/tmp/{base_name}.webp'

    with open(tmp_svg, 'w', encoding='utf-8') as f:
        f.write(svg_content)

    # Convert SVG to PNG using ffmpeg (rgba transparent)
    subprocess.run([
        'ffmpeg', '-y', '-i', tmp_svg,
        '-vf', f'scale={width}:{height}',
        tmp_png
    ], check=True, stdout=subprocess.DEVNULL, stderr=subprocess.DEVNULL)

    # Also convert to WebP
    subprocess.run([
        'ffmpeg', '-y', '-i', tmp_png,
        '-vcodec', 'libwebp',
        '-lossless', '1',
        tmp_webp
    ], check=True, stdout=subprocess.DEVNULL, stderr=subprocess.DEVNULL)

    for out_dir in OUTPUT_DIRS:
        os.makedirs(out_dir, exist_ok=True)
        # Copy to original target name (e.g. cctv-bullet-transparent.png)
        target_png = os.path.join(out_dir, f'{base_name}.png')
        target_webp = os.path.join(out_dir, f'{base_name}.webp')
        shutil.copyfile(tmp_png, target_png)
        shutil.copyfile(tmp_webp, target_webp)

        # Also copy to user's uploaded filename (e.g. cctv_solution.png)
        if alt_name:
            alt_png = os.path.join(out_dir, f'{alt_name}.png')
            shutil.copyfile(tmp_png, alt_png)

    print(f"Generated {base_name} & {alt_name} ({width}x{height})")


def get_cctv_bullet_svg():
    return '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600" width="800" height="600" fill="none">
  <defs>
    <!-- Background subtle shadow -->
    <ellipse cx="440" cy="490" rx="260" ry="24" fill="#000000" opacity="0.25" filter="blur(16px)"/>

    <!-- Metallic dark gunmetal gradients -->
    <linearGradient id="cctv-dark-body" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#3A414D"/>
      <stop offset="25%" stop-color="#282E37"/>
      <stop offset="70%" stop-color="#191D23"/>
      <stop offset="100%" stop-color="#121518"/>
    </linearGradient>

    <linearGradient id="cctv-hood" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#4B5563"/>
      <stop offset="30%" stop-color="#323943"/>
      <stop offset="85%" stop-color="#1E232A"/>
      <stop offset="100%" stop-color="#14181D"/>
    </linearGradient>

    <linearGradient id="cctv-lens-bezel" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#22272E"/>
      <stop offset="50%" stop-color="#0F1216"/>
      <stop offset="100%" stop-color="#080A0C"/>
    </linearGradient>

    <radialGradient id="cctv-glass" cx="45%" cy="40%" r="55%">
      <stop offset="0%" stop-color="#1E3A5F"/>
      <stop offset="40%" stop-color="#0B1D33"/>
      <stop offset="75%" stop-color="#050C16"/>
      <stop offset="100%" stop-color="#020509"/>
    </radialGradient>

    <radialGradient id="cctv-lens-reflection" cx="35%" cy="30%" r="45%">
      <stop offset="0%" stop-color="#38BDF8" stop-opacity="0.65"/>
      <stop offset="50%" stop-color="#0284C7" stop-opacity="0.2"/>
      <stop offset="100%" stop-color="#0284C7" stop-opacity="0"/>
    </radialGradient>

    <linearGradient id="bracket-metal" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#374151"/>
      <stop offset="50%" stop-color="#1F2937"/>
      <stop offset="100%" stop-color="#111827"/>
    </linearGradient>
  </defs>

  <g transform="translate(40, 20)">
    <!-- Base Mounting Plate -->
    <path d="M 120 380 C 100 380, 80 350, 80 300 C 80 250, 100 220, 120 220 L 145 220 L 145 380 Z" fill="url(#bracket-metal)"/>
    <ellipse cx="115" cy="300" rx="14" ry="70" fill="#181E24" stroke="#4B5563" stroke-width="2"/>
    <circle cx="115" cy="250" r="6" fill="#0B0E11" stroke="#4B5563" stroke-width="1.5"/>
    <circle cx="115" cy="350" r="6" fill="#0B0E11" stroke="#4B5563" stroke-width="1.5"/>
    <circle cx="110" cy="300" r="7" fill="#0B0E11" stroke="#4B5563" stroke-width="1.5"/>

    <!-- Bracket Swivel Arm -->
    <path d="M 140 280 L 220 260 L 250 270 L 250 330 L 220 340 L 140 320 Z" fill="url(#bracket-metal)"/>
    <!-- Swivel Joint Ball / Ring -->
    <circle cx="250" cy="300" r="28" fill="#2D3748" stroke="#4B5563" stroke-width="2"/>
    <circle cx="250" cy="300" r="14" fill="#1A202C"/>
    <!-- Tightening Knob -->
    <rect x="235" y="250" width="30" height="12" rx="4" fill="#4B5563"/>

    <!-- Camera Body (Dark Cylindrical Housing) -->
    <path d="M 270 240 L 530 190 L 550 195 L 550 385 L 530 390 L 270 340 Z" fill="url(#cctv-dark-body)"/>
    
    <!-- Top Highlights & Contour Lines -->
    <path d="M 270 240 L 530 190 L 550 195 L 290 245 Z" fill="#4B5563" opacity="0.6"/>
    <path d="M 270 340 L 530 390 L 550 385 L 290 335 Z" fill="#090B0E" opacity="0.8"/>

    <!-- Side Heat Fin Texture / Accents -->
    <line x1="310" y1="235" x2="310" y2="345" stroke="#181E24" stroke-width="3"/>
    <line x1="320" y1="233" x2="320" y2="347" stroke="#181E24" stroke-width="3"/>
    <line x1="330" y1="231" x2="330" y2="349" stroke="#181E24" stroke-width="3"/>

    <!-- Hikvision Logo and Markings -->
    <text x="360" y="285" fill="#E5E7EB" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="18" font-weight="900" letter-spacing="3">HIKVISION</text>
    <rect x="360" y="296" width="168" height="15" rx="3" fill="#B91C1C" opacity="0.9"/>
    <text x="364" y="307" fill="#FFFFFF" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="8.5" font-weight="800" letter-spacing="1">CORROSION RESISTANT+</text>

    <!-- Sunshield Hood Overhang -->
    <path d="M 290 220 L 590 160 L 610 165 L 610 240 L 590 230 L 310 270 Z" fill="url(#cctv-hood)"/>
    <!-- Hood Top Rim Highlight -->
    <path d="M 290 220 L 590 160 L 610 165 L 310 225 Z" fill="#6B7280" opacity="0.5"/>

    <!-- Camera Front Bezel (Square / Octagonal Bezel) -->
    <path d="M 545 190 L 630 175 L 645 190 L 645 370 L 630 385 L 545 390 Z" fill="url(#cctv-lens-bezel)"/>
    <rect x="560" y="195" width="75" height="175" rx="16" fill="#0A0D10" stroke="#2D3748" stroke-width="2"/>

    <!-- Main Lens Circle -->
    <circle cx="598" cy="255" r="44" fill="#050709" stroke="#374151" stroke-width="3"/>
    <circle cx="598" cy="255" r="36" fill="url(#cctv-glass)"/>
    <circle cx="598" cy="255" r="24" fill="#000000"/>
    <circle cx="598" cy="255" r="14" fill="#0284C7" opacity="0.4"/>
    <circle cx="598" cy="255" r="36" fill="url(#cctv-lens-reflection)"/>

    <!-- Smart IR Light & Microphone Array -->
    <rect x="580" y="318" width="36" height="24" rx="6" fill="#111827" stroke="#1F2937" stroke-width="1.5"/>
    <circle cx="590" cy="330" r="4" fill="#DC2626" opacity="0.85"/>
    <circle cx="606" cy="330" r="4" fill="#2563EB" opacity="0.85"/>
    <circle cx="598" cy="354" r="2.5" fill="#374151"/>
  </g>
</svg>'''


def get_access_control_svg():
    return '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600" width="600" height="600" fill="none">
  <defs>
    <!-- Ambient Shadow -->
    <ellipse cx="300" cy="540" rx="160" ry="20" fill="#000000" opacity="0.3" filter="blur(16px)"/>

    <!-- Terminal Chassis Gradients -->
    <linearGradient id="ac-chassis" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%" stop-color="#1F242D"/>
      <stop offset="30%" stop-color="#2D3441"/>
      <stop offset="70%" stop-color="#1A1F26"/>
      <stop offset="100%" stop-color="#101317"/>
    </linearGradient>

    <linearGradient id="ac-screen-border" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#4B5563"/>
      <stop offset="100%" stop-color="#1E242B"/>
    </linearGradient>

    <linearGradient id="ac-screen-bg" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#0F172A"/>
      <stop offset="50%" stop-color="#0284C7"/>
      <stop offset="100%" stop-color="#0369A1"/>
    </linearGradient>

    <radialGradient id="fp-sensor" cx="50%" cy="50%" r="50%">
      <stop offset="0%" stop-color="#38BDF8" stop-opacity="0.8"/>
      <stop offset="60%" stop-color="#0284C7" stop-opacity="0.4"/>
      <stop offset="100%" stop-color="#0369A1" stop-opacity="0.1"/>
    </radialGradient>
  </defs>

  <g transform="translate(140, 30)">
    <!-- Main Outer Body Pillar -->
    <rect x="0" y="0" width="320" height="520" rx="28" fill="url(#ac-chassis)" stroke="#4A5568" stroke-width="2.5"/>
    <rect x="6" y="6" width="308" height="508" rx="24" fill="none" stroke="#2D3748" stroke-width="1.5"/>

    <!-- Top Speaker Grille -->
    <g opacity="0.4">
      <circle cx="130" cy="22" r="1.5" fill="#E2E8F0"/>
      <circle cx="140" cy="22" r="1.5" fill="#E2E8F0"/>
      <circle cx="150" cy="22" r="1.5" fill="#E2E8F0"/>
      <circle cx="160" cy="22" r="1.5" fill="#E2E8F0"/>
      <circle cx="170" cy="22" r="1.5" fill="#E2E8F0"/>
      <circle cx="180" cy="22" r="1.5" fill="#E2E8F0"/>
      <circle cx="190" cy="22" r="1.5" fill="#E2E8F0"/>
    </g>

    <!-- LCD Display Screen Frame -->
    <rect x="25" y="38" width="270" height="150" rx="14" fill="#0A0D12" stroke="url(#ac-screen-border)" stroke-width="2"/>
    
    <!-- Active Color Screen Content -->
    <rect x="35" y="48" width="250" height="130" rx="8" fill="url(#ac-screen-bg)"/>
    
    <!-- Screen UI Header -->
    <text x="50" y="70" fill="#FFFFFF" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="12" font-weight="600">06/19 Wednesday</text>
    <text x="215" y="70" fill="#BAE6FD" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="11" font-weight="700">CAMNEX</text>
    
    <!-- Big Digital Time -->
    <text x="50" y="112" fill="#FFFFFF" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="34" font-weight="900" letter-spacing="1">08:48</text>

    <!-- Isometric Access Status Graphic on Screen -->
    <g transform="translate(195, 78)">
      <!-- 3D Access Box Graphic -->
      <polygon points="35,5 65,22 35,38 5,22" fill="#38BDF8" opacity="0.8"/>
      <polygon points="5,22 35,38 35,62 5,46" fill="#0284C7"/>
      <polygon points="35,38 65,22 65,46 35,62" fill="#0369A1"/>
      <circle cx="35" cy="22" r="6" fill="#FFFFFF"/>
    </g>

    <text x="50" y="145" fill="#E0F2FE" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="11" font-weight="500">Please Authenticate</text>

    <!-- HIKVISION Branding -->
    <text x="160" y="210" fill="#94A3B8" font-family="-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif" font-size="11" font-weight="800" text-anchor="middle" letter-spacing="3">HIKVISION</text>

    <!-- Numeric Backlit Keypad Matrix -->
    <g transform="translate(45, 225)">
      <!-- Key template macro -->
      <!-- Row 1: 1, 2, 3, ESC -->
      <rect x="0" y="0" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="24" y="22" fill="#F8FAFC" font-family="sans-serif" font-size="14" font-weight="bold" text-anchor="middle">1</text>
      
      <rect x="60" y="0" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="84" y="22" fill="#F8FAFC" font-family="sans-serif" font-size="14" font-weight="bold" text-anchor="middle">2</text>

      <rect x="120" y="0" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="144" y="22" fill="#F8FAFC" font-family="sans-serif" font-size="14" font-weight="bold" text-anchor="middle">3</text>

      <rect x="180" y="0" width="48" height="32" rx="6" fill="#0F172A" stroke="#EF4444" stroke-width="1.2"/>
      <text x="204" y="21" fill="#EF4444" font-family="sans-serif" font-size="11" font-weight="bold" text-anchor="middle">ESC</text>

      <!-- Row 2: 4, 5, 6, UP -->
      <rect x="0" y="40" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="24" y="62" fill="#F8FAFC" font-family="sans-serif" font-size="14" font-weight="bold" text-anchor="middle">4</text>
      
      <rect x="60" y="40" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="84" y="62" fill="#F8FAFC" font-family="sans-serif" font-size="14" font-weight="bold" text-anchor="middle">5</text>

      <rect x="120" y="40" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="144" y="62" fill="#F8FAFC" font-family="sans-serif" font-size="14" font-weight="bold" text-anchor="middle">6</text>

      <rect x="180" y="40" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="204" y="61" fill="#38BDF8" font-family="sans-serif" font-size="14" font-weight="bold" text-anchor="middle">▲</text>

      <!-- Row 3: 7, 8, 9, DOWN -->
      <rect x="0" y="80" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="24" y="102" fill="#F8FAFC" font-family="sans-serif" font-size="14" font-weight="bold" text-anchor="middle">7</text>
      
      <rect x="60" y="80" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="84" y="102" fill="#F8FAFC" font-family="sans-serif" font-size="14" font-weight="bold" text-anchor="middle">8</text>

      <rect x="120" y="80" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="144" y="102" fill="#F8FAFC" font-family="sans-serif" font-size="14" font-weight="bold" text-anchor="middle">9</text>

      <rect x="180" y="80" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="204" y="101" fill="#38BDF8" font-family="sans-serif" font-size="14" font-weight="bold" text-anchor="middle">▼</text>

      <!-- Row 4: BELL, 0, OK -->
      <rect x="0" y="120" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="24" y="141" fill="#FACC15" font-family="sans-serif" font-size="13" font-weight="bold" text-anchor="middle">🔔</text>
      
      <rect x="60" y="120" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="84" y="142" fill="#F8FAFC" font-family="sans-serif" font-size="14" font-weight="bold" text-anchor="middle">0</text>

      <rect x="120" y="120" width="48" height="32" rx="6" fill="#1E293B" stroke="#334155" stroke-width="1.2"/>
      <text x="144" y="141" fill="#94A3B8" font-family="sans-serif" font-size="11" font-weight="bold" text-anchor="middle">CARD</text>

      <rect x="180" y="120" width="48" height="32" rx="6" fill="#065F46" stroke="#10B981" stroke-width="1.2"/>
      <text x="204" y="141" fill="#10B981" font-family="sans-serif" font-size="12" font-weight="bold" text-anchor="middle">OK</text>
    </g>

    <!-- Fingerprint Optical Scanner -->
    <rect x="110" y="395" width="100" height="95" rx="16" fill="#0A0D12" stroke="#3B82F6" stroke-width="2.5"/>
    <rect x="118" y="403" width="84" height="79" rx="12" fill="url(#fp-sensor)"/>
    
    <!-- Fingerprint Sensor Ridges Icon -->
    <g transform="translate(138, 417)" stroke="#67E8F9" stroke-width="2" fill="none" stroke-linecap="round">
      <path d="M 12 5 C 18 5 24 9 24 18 C 24 28 20 35 15 42"/>
      <path d="M 6 12 C 12 8 20 10 20 18 C 20 26 15 32 10 38"/>
      <path d="M 1 20 C 3 15 8 13 14 15 C 17 16 17 21 16 27 C 15 33 8 36 6 42"/>
      <path d="M 9 24 C 11 22 13 22 13 26 C 13 30 11 33 10 36"/>
    </g>
  </g>
</svg>'''


def get_communication_svg():
    return '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600" width="600" height="600" fill="none">
  <defs>
    <!-- Soft Base Shadow -->
    <ellipse cx="300" cy="540" rx="240" ry="24" fill="#000000" opacity="0.32" filter="blur(16px)"/>

    <!-- Gradients -->
    <linearGradient id="planet-chassis" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#334155"/>
      <stop offset="40%" stop-color="#1E293B"/>
      <stop offset="100%" stop-color="#0F172A"/>
    </linearGradient>

    <linearGradient id="ipx-face" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%" stop-color="#1E293B"/>
      <stop offset="70%" stop-color="#0F172A"/>
      <stop offset="100%" stop-color="#020617"/>
    </linearGradient>

    <linearGradient id="phone-screen-bg" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#38BDF8"/>
      <stop offset="60%" stop-color="#0284C7"/>
      <stop offset="100%" stop-color="#0369A1"/>
    </linearGradient>
  </defs>

  <!-- 1. Bottom Unit: PLANET VGW-800 Series VoIP Gateway -->
  <g transform="translate(60, 420)">
    <!-- Rack Ears -->
    <path d="M 0 20 L 20 20 L 20 70 L 0 70 Z" fill="#475569"/>
    <circle cx="10" cy="32" r="3.5" fill="#0F172A"/>
    <circle cx="10" cy="58" r="3.5" fill="#0F172A"/>
    
    <path d="M 460 20 L 480 20 L 480 70 L 460 70 Z" fill="#475569"/>
    <circle cx="470" cy="32" r="3.5" fill="#0F172A"/>
    <circle cx="470" cy="58" r="3.5" fill="#0F172A"/>

    <!-- Main 19" 1U Chassis -->
    <rect x="20" y="10" width="440" height="75" rx="4" fill="url(#planet-chassis)" stroke="#64748B" stroke-width="1.5"/>
    <rect x="28" y="18" width="424" height="59" rx="2" fill="url(#ipx-face)"/>

    <!-- Branding -->
    <text x="45" y="42" fill="#38BDF8" font-family="sans-serif" font-size="16" font-weight="900" letter-spacing="2">PLANET</text>
    <text x="45" y="60" fill="#94A3B8" font-family="sans-serif" font-size="10" font-weight="700">VGW-800 Series</text>
    <text x="145" y="60" fill="#64748B" font-family="sans-serif" font-size="9">Internet Telephony Gateway</text>

    <!-- 8 RJ11/FXS Phone Ports -->
    <g transform="translate(260, 32)">
      <rect x="0" y="0" width="16" height="24" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="22" y="0" width="16" height="24" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="44" y="0" width="16" height="24" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="66" y="0" width="16" height="24" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="88" y="0" width="16" height="24" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="110" y="0" width="16" height="24" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="132" y="0" width="16" height="24" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="154" y="0" width="16" height="24" rx="2" fill="#020617" stroke="#475569"/>
    </g>

    <!-- Status LEDs -->
    <circle cx="230" cy="38" r="3" fill="#10B981"/>
    <circle cx="230" cy="50" r="3" fill="#10B981"/>
    <circle cx="242" cy="38" r="3" fill="#38BDF8"/>
    <circle cx="242" cy="50" r="3" fill="#38BDF8"/>
  </g>

  <!-- 2. Middle Unit: PLANET IPX-2100 IP PBX Unit -->
  <g transform="translate(85, 335)">
    <!-- Desktop / 1U Chassis -->
    <rect x="0" y="0" width="310" height="70" rx="6" fill="url(#planet-chassis)" stroke="#64748B" stroke-width="1.5"/>
    <rect x="6" y="6" width="298" height="58" rx="4" fill="url(#ipx-face)"/>

    <text x="25" y="32" fill="#38BDF8" font-family="sans-serif" font-size="14" font-weight="900" letter-spacing="2">PLANET</text>
    <text x="95" y="32" fill="#F8FAFC" font-family="sans-serif" font-size="12" font-weight="800">IPX-2100</text>
    <text x="25" y="50" fill="#94A3B8" font-family="sans-serif" font-size="9" font-weight="600">Internet Telephony PBX System</text>

    <!-- LED status indicators -->
    <g transform="translate(215, 20)">
      <circle cx="10" cy="10" r="3" fill="#10B981"/>
      <text x="20" y="13" fill="#64748B" font-family="sans-serif" font-size="8">PWR</text>
      
      <circle cx="10" cy="24" r="3" fill="#10B981"/>
      <text x="20" y="27" fill="#64748B" font-family="sans-serif" font-size="8">RUN</text>

      <circle cx="50" cy="10" r="3" fill="#38BDF8"/>
      <text x="60" y="13" fill="#64748B" font-family="sans-serif" font-size="8">WAN</text>
      
      <circle cx="50" cy="24" r="3" fill="#38BDF8"/>
      <text x="60" y="27" fill="#64748B" font-family="sans-serif" font-size="8">LAN</text>
    </g>
  </g>

  <!-- 3. Top Right: PLANET IP Phone with Color Screen & Handset -->
  <g transform="translate(300, 60)">
    <!-- Angled Desk Stand shadow -->
    <polygon points="40,240 240,240 220,100 60,100" fill="#0F172A" opacity="0.6"/>

    <!-- IP Phone Base Console -->
    <polygon points="30,230 250,230 235,40 55,40" fill="url(#planet-chassis)" stroke="#475569" stroke-width="2"/>

    <!-- Left Handset Cradle Area -->
    <rect x="45" y="55" width="55" height="160" rx="10" fill="#090D14"/>

    <!-- Telephone Handset -->
    <path d="M 40 45 C 40 30 65 20 85 20 C 105 20 110 30 110 45 L 105 85 C 105 100 95 110 90 120 L 90 145 C 95 155 105 165 105 180 L 110 220 C 110 235 105 245 85 245 C 65 245 40 235 40 220 Z" fill="#1E293B" stroke="#64748B" stroke-width="2"/>
    <!-- Coiled cord -->
    <path d="M 65 245 Q 55 265 65 285 Q 75 305 60 325 L 55 340" stroke="#334155" stroke-width="5" fill="none" stroke-linecap="round"/>

    <!-- Color LCD Screen Module -->
    <rect x="125" y="48" width="110" height="75" rx="6" fill="#0A0F1D" stroke="#0284C7" stroke-width="1.8"/>
    <rect x="131" y="54" width="98" height="63" rx="4" fill="url(#phone-screen-bg)"/>

    <!-- Graphic wallpaper hot air balloon on phone screen -->
    <circle cx="180" cy="78" r="14" fill="#F43F5E"/>
    <path d="M 172 82 L 180 94 L 188 82 Z" fill="#F43F5E"/>
    <rect x="177" y="96" width="6" height="4" fill="#FDE047"/>
    <text x="140" y="68" fill="#FFFFFF" font-family="sans-serif" font-size="8" font-weight="bold">PLANET HD</text>

    <!-- Navigation Dial & Soft Keys -->
    <circle cx="180" cy="140" r="16" fill="#0F172A" stroke="#475569" stroke-width="2"/>
    <circle cx="180" cy="140" r="8" fill="#334155"/>

    <!-- Phone Keypad (3x4) -->
    <g transform="translate(135, 165)" fill="#0F172A" stroke="#334155">
      <rect x="0" y="0" width="22" height="12" rx="2"/><text x="11" y="9" fill="#F8FAFC" font-size="8" font-family="sans-serif" text-anchor="middle">1</text>
      <rect x="28" y="0" width="22" height="12" rx="2"/><text x="39" y="9" fill="#F8FAFC" font-size="8" font-family="sans-serif" text-anchor="middle">2</text>
      <rect x="56" y="0" width="22" height="12" rx="2"/><text x="67" y="9" fill="#F8FAFC" font-size="8" font-family="sans-serif" text-anchor="middle">3</text>

      <rect x="0" y="16" width="22" height="12" rx="2"/><text x="11" y="25" fill="#F8FAFC" font-size="8" font-family="sans-serif" text-anchor="middle">4</text>
      <rect x="28" y="16" width="22" height="12" rx="2"/><text x="39" y="25" fill="#F8FAFC" font-size="8" font-family="sans-serif" text-anchor="middle">5</text>
      <rect x="56" y="16" width="22" height="12" rx="2"/><text x="67" y="25" fill="#F8FAFC" font-size="8" font-family="sans-serif" text-anchor="middle">6</text>

      <rect x="0" y="32" width="22" height="12" rx="2"/><text x="11" y="41" fill="#F8FAFC" font-size="8" font-family="sans-serif" text-anchor="middle">7</text>
      <rect x="28" y="32" width="22" height="12" rx="2"/><text x="39" y="41" fill="#F8FAFC" font-size="8" font-family="sans-serif" text-anchor="middle">8</text>
      <rect x="56" y="32" width="22" height="12" rx="2"/><text x="67" y="41" fill="#F8FAFC" font-size="8" font-family="sans-serif" text-anchor="middle">9</text>

      <rect x="0" y="48" width="22" height="12" rx="2"/><text x="11" y="57" fill="#F8FAFC" font-size="8" font-family="sans-serif" text-anchor="middle">*</text>
      <rect x="28" y="48" width="22" height="12" rx="2"/><text x="39" y="57" fill="#F8FAFC" font-size="8" font-family="sans-serif" text-anchor="middle">0</text>
      <rect x="56" y="48" width="22" height="12" rx="2"/><text x="67" y="57" fill="#F8FAFC" font-size="8" font-family="sans-serif" text-anchor="middle">#</text>
    </g>
  </g>
</svg>'''


def get_smart_home_svg():
    return '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600" width="600" height="600" fill="none">
  <defs>
    <!-- Shadow -->
    <ellipse cx="300" cy="510" rx="220" ry="22" fill="#000000" opacity="0.3" filter="blur(16px)"/>

    <linearGradient id="sh-silver-frame" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#E2E8F0"/>
      <stop offset="30%" stop-color="#CBD5E1"/>
      <stop offset="70%" stop-color="#94A3B8"/>
      <stop offset="100%" stop-color="#64748B"/>
    </linearGradient>

    <linearGradient id="sh-dial-rim" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#FFFFFF"/>
      <stop offset="50%" stop-color="#CBD5E1"/>
      <stop offset="100%" stop-color="#475569"/>
    </linearGradient>

    <radialGradient id="sh-dial-screen" cx="50%" cy="50%" r="50%">
      <stop offset="0%" stop-color="#1E293B"/>
      <stop offset="85%" stop-color="#0F172A"/>
      <stop offset="100%" stop-color="#020617"/>
    </radialGradient>
  </defs>

  <g transform="translate(60, 60)">
    <!-- Rear Mount Housing (Isometric perspective on back) -->
    <path d="M 360 120 L 460 70 L 460 350 L 360 400 Z" fill="#334155" stroke="#475569" stroke-width="2"/>
    <!-- RJ45 Ethernet Port on Back -->
    <rect x="385" y="170" width="40" height="35" rx="4" fill="#0F172A" stroke="#64748B" stroke-width="1.5"/>
    <rect x="395" y="180" width="20" height="15" fill="#E2E8F0"/>
    <!-- Terminal Screw Block (Yellow/Orange) -->
    <rect x="385" y="230" width="45" height="60" rx="3" fill="#D97706" stroke="#92400E"/>
    <circle cx="395" cy="245" r="3" fill="#78350F"/>
    <circle cx="395" cy="265" r="3" fill="#78350F"/>
    <circle cx="395" cy="285" r="3" fill="#78350F"/>

    <!-- Front Smart Touchscreen Panel -->
    <rect x="20" y="50" width="370" height="360" rx="24" fill="url(#sh-silver-frame)" stroke="#F1F5F9" stroke-width="3"/>
    
    <!-- Edge Glass Bezel -->
    <rect x="30" y="60" width="350" height="340" rx="18" fill="#0A0F1D" stroke="#1E293B" stroke-width="2"/>

    <!-- UI Header Bar -->
    <text x="50" y="90" fill="#FFFFFF" font-family="sans-serif" font-size="13" font-weight="bold">13:59</text>
    <text x="95" y="90" fill="#94A3B8" font-family="sans-serif" font-size="11">2024/09/18 Wed</text>
    <text x="320" y="90" fill="#38BDF8" font-family="sans-serif" font-size="11" font-weight="600">26°C ☀️</text>

    <!-- UI Tiles in Grid -->
    <!-- Tile 1: Living Room Lights -->
    <rect x="50" y="105" width="85" height="60" rx="10" fill="#1E293B" stroke="#334155"/>
    <text x="60" y="125" fill="#FACC15" font-size="14">💡</text>
    <text x="60" y="145" fill="#F8FAFC" font-family="sans-serif" font-size="10" font-weight="bold">Lights</text>
    <text x="60" y="157" fill="#10B981" font-family="sans-serif" font-size="8">ON (4)</text>

    <!-- Tile 2: Air Condition -->
    <rect x="145" y="105" width="85" height="60" rx="10" fill="#0284C7" stroke="#38BDF8"/>
    <text x="155" y="125" fill="#FFFFFF" font-size="14">❄️</text>
    <text x="155" y="145" fill="#FFFFFF" font-family="sans-serif" font-size="10" font-weight="bold">AC Cool</text>
    <text x="155" y="157" fill="#E0F2FE" font-family="sans-serif" font-size="8">28°C Auto</text>

    <!-- Tile 3: Music -->
    <rect x="240" y="105" width="120" height="60" rx="10" fill="#1E293B" stroke="#334155"/>
    <text x="250" y="125" fill="#EC4899" font-size="14">🎵</text>
    <text x="250" y="145" fill="#F8FAFC" font-family="sans-serif" font-size="10" font-weight="bold">Audio Zone</text>
    <text x="250" y="157" fill="#94A3B8" font-family="sans-serif" font-size="8">Playing: Jazz</text>

    <!-- Center Rotary Knob Assembly -->
    <g transform="translate(205, 275)">
      <!-- Outer Metal Knurled Ring -->
      <circle cx="0" cy="0" r="92" fill="url(#sh-dial-rim)" stroke="#94A3B8" stroke-width="3"/>
      
      <!-- Colored Thermostat Scale Arc -->
      <circle cx="0" cy="0" r="82" fill="none" stroke="#334155" stroke-width="8"/>
      <circle cx="0" cy="0" r="82" fill="none" stroke="#F97316" stroke-width="8" stroke-dasharray="320 200" stroke-linecap="round"/>
      
      <!-- Inner Rotary Display Screen -->
      <circle cx="0" cy="0" r="74" fill="url(#sh-dial-screen)" stroke="#0F172A" stroke-width="2"/>
      
      <!-- Temperature Text -->
      <text x="-6" y="8" fill="#FFFFFF" font-family="sans-serif" font-size="38" font-weight="900" text-anchor="middle">28</text>
      <text x="28" y="-4" fill="#F97316" font-family="sans-serif" font-size="18" font-weight="bold">°C</text>
      <text x="0" y="32" fill="#94A3B8" font-family="sans-serif" font-size="11" font-weight="600" text-anchor="middle">Target Temp</text>
    </g>

    <!-- Bottom Mode Buttons: Home Mode, Night Mode -->
    <rect x="50" y="360" width="145" height="30" rx="8" fill="#1E293B" stroke="#334155"/>
    <text x="122" y="380" fill="#38BDF8" font-family="sans-serif" font-size="10" font-weight="bold" text-anchor="middle">🏠 Home Mode</text>

    <rect x="215" y="360" width="145" height="30" rx="8" fill="#1E293B" stroke="#334155"/>
    <text x="287" y="380" fill="#A855F7" font-family="sans-serif" font-size="10" font-weight="bold" text-anchor="middle">🌙 Night Mode</text>
  </g>
</svg>'''


def get_interactive_panel_svg():
    return '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600" width="600" height="600" fill="none">
  <defs>
    <!-- Floor Shadow -->
    <ellipse cx="300" cy="530" rx="230" ry="24" fill="#000000" opacity="0.32" filter="blur(16px)"/>

    <linearGradient id="panel-bezel" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#2D3748"/>
      <stop offset="100%" stop-color="#0F172A"/>
    </linearGradient>

    <linearGradient id="panel-screen" x1="0" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#090D16"/>
      <stop offset="100%" stop-color="#020617"/>
    </linearGradient>
  </defs>

  <g transform="translate(60, 110)">
    <!-- Back Mount Bracket Housing (Angled perspective) -->
    <polygon points="400,60 460,30 460,320 400,340" fill="#1E293B" stroke="#334155" stroke-width="2"/>
    <circle cx="430" cy="180" r="16" fill="#0F172A" stroke="#475569" stroke-width="1.5"/>

    <!-- Main 10.1" Interactive Panel Chassis -->
    <rect x="20" y="20" width="400" height="330" rx="16" fill="url(#panel-bezel)" stroke="#475569" stroke-width="2"/>

    <!-- Vibrant Green Status LED Bar (Indicates Room Available) -->
    <rect x="12" y="28" width="10" height="314" rx="5" fill="#22C55E" filter="drop-shadow(-2px 0 8px #22C55E)"/>
    <rect x="28" y="342" width="384" height="8" rx="4" fill="#22C55E" filter="drop-shadow(0 2px 8px #22C55E)"/>

    <!-- High-Definition Display Screen -->
    <rect x="30" y="30" width="380" height="310" rx="10" fill="url(#panel-screen)"/>

    <!-- Screen Content: Room 359 UI -->
    <!-- Top Header: Date and Time -->
    <text x="55" y="70" fill="#94A3B8" font-family="sans-serif" font-size="13" font-weight="600">Tuesday, September 22</text>
    <text x="350" y="70" fill="#F8FAFC" font-family="sans-serif" font-size="14" font-weight="bold">9:55 AM</text>
    <line x1="55" y1="82" x2="385" y2="82" stroke="#1E293B" stroke-width="1.5"/>

    <!-- Room Number Headline -->
    <text x="55" y="130" fill="#FFFFFF" font-family="sans-serif" font-size="34" font-weight="900" letter-spacing="1">Room 359</text>
    
    <!-- Availability Status Pill Banner -->
    <rect x="55" y="150" width="330" height="42" rx="8" fill="#15803D" stroke="#22C55E" stroke-width="1.5"/>
    <circle cx="78" cy="171" r="6" fill="#4ADE80"/>
    <text x="96" y="177" fill="#FFFFFF" font-family="sans-serif" font-size="15" font-weight="800" letter-spacing="0.5">AVAILABLE UNTIL 10:30 AM</text>

    <!-- Next Event Timeline -->
    <rect x="55" y="210" width="330" height="75" rx="10" fill="#0F172A" stroke="#1E293B" stroke-width="1.5"/>
    <text x="75" y="235" fill="#94A3B8" font-family="sans-serif" font-size="11" font-weight="600">NEXT UP: 10:30 AM - 11:30 AM</text>
    <text x="75" y="262" fill="#F1F5F9" font-family="sans-serif" font-size="15" font-weight="bold">Project Kickoff Meeting</text>
    <text x="325" y="262" fill="#38BDF8" font-family="sans-serif" font-size="11" font-weight="bold">Organizer</text>

    <!-- Bottom Action & NFC Tap Emblem -->
    <rect x="55" y="298" width="130" height="28" rx="6" fill="#2563EB"/>
    <text x="120" y="316" fill="#FFFFFF" font-family="sans-serif" font-size="11" font-weight="bold" text-anchor="middle">Book Room Now</text>

    <text x="345" y="316" fill="#64748B" font-family="sans-serif" font-size="10" font-weight="bold">📶 NFC TAP</text>
  </g>
</svg>'''


def get_server_svg():
    return '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600" width="600" height="600" fill="none">
  <defs>
    <!-- Base Shadow -->
    <ellipse cx="300" cy="540" rx="220" ry="22" fill="#000000" opacity="0.35" filter="blur(16px)"/>

    <!-- Rack Chassis Gradient -->
    <linearGradient id="rack-frame" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%" stop-color="#1E293B"/>
      <stop offset="50%" stop-color="#334155"/>
      <stop offset="100%" stop-color="#0F172A"/>
    </linearGradient>

    <linearGradient id="server-blade" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%" stop-color="#0F172A"/>
      <stop offset="20%" stop-color="#1E293B"/>
      <stop offset="80%" stop-color="#1E293B"/>
      <stop offset="100%" stop-color="#020617"/>
    </linearGradient>
  </defs>

  <g transform="translate(70, 30)">
    <!-- LEFT 42U RACK CABINET -->
    <rect x="10" y="10" width="210" height="500" rx="10" fill="url(#rack-frame)" stroke="#475569" stroke-width="2.5"/>
    <rect x="20" y="25" width="190" height="470" rx="4" fill="#030712"/>

    <!-- Top Server Switch (Left) -->
    <g transform="translate(25, 35)">
      <rect x="0" y="0" width="180" height="24" rx="3" fill="url(#server-blade)" stroke="#334155"/>
      <!-- Port Matrix with Cyan Lights -->
      <circle cx="15" cy="12" r="2.5" fill="#38BDF8"/>
      <circle cx="25" cy="12" r="2.5" fill="#38BDF8"/>
      <circle cx="35" cy="12" r="2.5" fill="#38BDF8"/>
      <circle cx="45" cy="12" r="2.5" fill="#38BDF8"/>
      <circle cx="65" cy="12" r="2.5" fill="#22C55E"/>
      <circle cx="75" cy="12" r="2.5" fill="#22C55E"/>
      <rect x="100" y="6" width="65" height="12" rx="2" fill="#0F172A"/>
    </g>

    <!-- Blade Server Units Repeat Loop Left -->
    <!-- Blade 1 to 7 -->
    <g transform="translate(25, 70)">
      <rect x="0" y="0" width="180" height="38" rx="3" fill="url(#server-blade)" stroke="#1E293B"/>
      <!-- Drive Trays -->
      <rect x="10" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="36" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="62" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="88" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <circle cx="120" cy="14" r="2.5" fill="#22C55E"/>
      <circle cx="120" cy="24" r="2.5" fill="#38BDF8"/>
      <circle cx="130" cy="14" r="2.5" fill="#22C55E"/>
      <circle cx="130" cy="24" r="2.5" fill="#EAB308"/>
      <rect x="145" y="10" width="25" height="18" rx="2" fill="#0B0F19"/>
    </g>

    <g transform="translate(25, 120)">
      <rect x="0" y="0" width="180" height="38" rx="3" fill="url(#server-blade)" stroke="#1E293B"/>
      <rect x="10" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="36" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="62" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="88" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <circle cx="120" cy="14" r="2.5" fill="#22C55E"/>
      <circle cx="120" cy="24" r="2.5" fill="#38BDF8"/>
      <circle cx="130" cy="14" r="2.5" fill="#22C55E"/>
      <circle cx="130" cy="24" r="2.5" fill="#22C55E"/>
      <rect x="145" y="10" width="25" height="18" rx="2" fill="#0B0F19"/>
    </g>

    <g transform="translate(25, 170)">
      <rect x="0" y="0" width="180" height="55" rx="3" fill="url(#server-blade)" stroke="#1E293B"/>
      <!-- High Density Storage Array -->
      <rect x="8" y="8" width="14" height="39" rx="2" fill="#020617" stroke="#334155"/>
      <rect x="25" y="8" width="14" height="39" rx="2" fill="#020617" stroke="#334155"/>
      <rect x="42" y="8" width="14" height="39" rx="2" fill="#020617" stroke="#334155"/>
      <rect x="59" y="8" width="14" height="39" rx="2" fill="#020617" stroke="#334155"/>
      <rect x="76" y="8" width="14" height="39" rx="2" fill="#020617" stroke="#334155"/>
      <circle cx="105" cy="20" r="2.5" fill="#38BDF8"/>
      <circle cx="105" cy="35" r="2.5" fill="#EC4899"/>
      <circle cx="118" cy="20" r="2.5" fill="#22C55E"/>
      <circle cx="118" cy="35" r="2.5" fill="#22C55E"/>
    </g>

    <!-- Lower Units -->
    <g transform="translate(25, 240)">
      <rect x="0" y="0" width="180" height="80" rx="3" fill="url(#server-blade)" stroke="#1E293B"/>
      <circle cx="20" cy="40" r="4" fill="#38BDF8"/>
      <circle cx="35" cy="40" r="4" fill="#22C55E"/>
      <text x="90" y="45" fill="#475569" font-family="sans-serif" font-size="12" font-weight="bold" text-anchor="middle">STORAGE SAN</text>
    </g>

    <g transform="translate(25, 335)">
      <rect x="0" y="0" width="180" height="80" rx="3" fill="url(#server-blade)" stroke="#1E293B"/>
      <circle cx="20" cy="40" r="4" fill="#22C55E"/>
      <circle cx="35" cy="40" r="4" fill="#22C55E"/>
      <text x="90" y="45" fill="#475569" font-family="sans-serif" font-size="12" font-weight="bold" text-anchor="middle">UPS POWER 1</text>
    </g>

    <g transform="translate(25, 425)">
      <rect x="0" y="0" width="180" height="60" rx="3" fill="url(#server-blade)" stroke="#1E293B"/>
      <text x="90" y="35" fill="#475569" font-family="sans-serif" font-size="12" font-weight="bold" text-anchor="middle">BATTERY MODULE</text>
    </g>


    <!-- RIGHT 42U RACK CABINET -->
    <rect x="240" y="10" width="210" height="500" rx="10" fill="url(#rack-frame)" stroke="#475569" stroke-width="2.5"/>
    <rect x="250" y="25" width="190" height="470" rx="4" fill="#030712"/>

    <!-- Symmetrical Datacenter Stack Right -->
    <g transform="translate(255, 35)">
      <rect x="0" y="0" width="180" height="24" rx="3" fill="url(#server-blade)" stroke="#334155"/>
      <circle cx="15" cy="12" r="2.5" fill="#EC4899"/>
      <circle cx="25" cy="12" r="2.5" fill="#EC4899"/>
      <circle cx="35" cy="12" r="2.5" fill="#38BDF8"/>
      <circle cx="45" cy="12" r="2.5" fill="#38BDF8"/>
      <circle cx="65" cy="12" r="2.5" fill="#22C55E"/>
      <circle cx="75" cy="12" r="2.5" fill="#22C55E"/>
      <rect x="100" y="6" width="65" height="12" rx="2" fill="#0F172A"/>
    </g>

    <g transform="translate(255, 70)">
      <rect x="0" y="0" width="180" height="38" rx="3" fill="url(#server-blade)" stroke="#1E293B"/>
      <rect x="10" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="36" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="62" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="88" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <circle cx="120" cy="14" r="2.5" fill="#38BDF8"/>
      <circle cx="120" cy="24" r="2.5" fill="#22C55E"/>
      <circle cx="130" cy="14" r="2.5" fill="#38BDF8"/>
      <circle cx="130" cy="24" r="2.5" fill="#22C55E"/>
      <rect x="145" y="10" width="25" height="18" rx="2" fill="#0B0F19"/>
    </g>

    <g transform="translate(255, 120)">
      <rect x="0" y="0" width="180" height="38" rx="3" fill="url(#server-blade)" stroke="#1E293B"/>
      <rect x="10" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="36" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="62" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <rect x="88" y="8" width="22" height="22" rx="2" fill="#020617" stroke="#475569"/>
      <circle cx="120" cy="14" r="2.5" fill="#22C55E"/>
      <circle cx="120" cy="24" r="2.5" fill="#22C55E"/>
      <circle cx="130" cy="14" r="2.5" fill="#22C55E"/>
      <circle cx="130" cy="24" r="2.5" fill="#22C55E"/>
      <rect x="145" y="10" width="25" height="18" rx="2" fill="#0B0F19"/>
    </g>

    <g transform="translate(255, 170)">
      <rect x="0" y="0" width="180" height="55" rx="3" fill="url(#server-blade)" stroke="#1E293B"/>
      <rect x="8" y="8" width="14" height="39" rx="2" fill="#020617" stroke="#334155"/>
      <rect x="25" y="8" width="14" height="39" rx="2" fill="#020617" stroke="#334155"/>
      <rect x="42" y="8" width="14" height="39" rx="2" fill="#020617" stroke="#334155"/>
      <rect x="59" y="8" width="14" height="39" rx="2" fill="#020617" stroke="#334155"/>
      <rect x="76" y="8" width="14" height="39" rx="2" fill="#020617" stroke="#334155"/>
      <circle cx="105" cy="20" r="2.5" fill="#22C55E"/>
      <circle cx="105" cy="35" r="2.5" fill="#38BDF8"/>
      <circle cx="118" cy="20" r="2.5" fill="#22C55E"/>
      <circle cx="118" cy="35" r="2.5" fill="#EC4899"/>
    </g>

    <g transform="translate(255, 240)">
      <rect x="0" y="0" width="180" height="80" rx="3" fill="url(#server-blade)" stroke="#1E293B"/>
      <circle cx="20" cy="40" r="4" fill="#22C55E"/>
      <circle cx="35" cy="40" r="4" fill="#38BDF8"/>
      <text x="90" y="45" fill="#475569" font-family="sans-serif" font-size="12" font-weight="bold" text-anchor="middle">STORAGE EXPANSION</text>
    </g>

    <g transform="translate(255, 335)">
      <rect x="0" y="0" width="180" height="80" rx="3" fill="url(#server-blade)" stroke="#1E293B"/>
      <circle cx="20" cy="40" r="4" fill="#22C55E"/>
      <circle cx="35" cy="40" r="4" fill="#22C55E"/>
      <text x="90" y="45" fill="#475569" font-family="sans-serif" font-size="12" font-weight="bold" text-anchor="middle">UPS POWER 2</text>
    </g>

    <g transform="translate(255, 425)">
      <rect x="0" y="0" width="180" height="60" rx="3" fill="url(#server-blade)" stroke="#1E293B"/>
      <text x="90" y="35" fill="#475569" font-family="sans-serif" font-size="12" font-weight="bold" text-anchor="middle">BATTERY MODULE</text>
    </g>
  </g>
</svg>'''


def get_physical_security_svg():
    return '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600" width="600" height="600" fill="none">
  <defs>
    <!-- Base Floor Shadow -->
    <ellipse cx="300" cy="545" rx="190" ry="20" fill="#000000" opacity="0.3" filter="blur(16px)"/>

    <linearGradient id="gate-pillar" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%" stop-color="#475569"/>
      <stop offset="25%" stop-color="#E2E8F0"/>
      <stop offset="80%" stop-color="#CBD5E1"/>
      <stop offset="100%" stop-color="#334155"/>
    </linearGradient>

    <linearGradient id="gate-border" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%" stop-color="#1E293B"/>
      <stop offset="100%" stop-color="#0F172A"/>
    </linearGradient>

    <linearGradient id="cam-housing" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#F8FAFC"/>
      <stop offset="70%" stop-color="#E2E8F0"/>
      <stop offset="100%" stop-color="#94A3B8"/>
    </linearGradient>
  </defs>

  <g transform="translate(110, 40)">
    <!-- LEFT ARCHWAY PILLAR -->
    <rect x="20" y="80" width="60" height="430" rx="4" fill="url(#gate-pillar)" stroke="#64748B" stroke-width="2"/>
    <rect x="15" y="80" width="12" height="430" fill="url(#gate-border)"/>
    <rect x="68" y="80" width="12" height="430" fill="url(#gate-border)"/>
    
    <!-- Left Multi-Zone Detection Indicator LEDs -->
    <g transform="translate(42, 100)" fill="#10B981">
      <rect x="0" y="0" width="16" height="6" rx="2"/>
      <rect x="0" y="30" width="16" height="6" rx="2"/>
      <rect x="0" y="60" width="16" height="6" rx="2"/>
      <rect x="0" y="90" width="16" height="6" rx="2"/>
      <rect x="0" y="120" width="16" height="6" rx="2"/>
      <rect x="0" y="150" width="16" height="6" rx="2"/>
      <rect x="0" y="180" width="16" height="6" rx="2"/>
      <rect x="0" y="210" width="16" height="6" rx="2"/>
      <rect x="0" y="240" width="16" height="6" rx="2"/>
      <rect x="0" y="270" width="16" height="6" rx="2"/>
      <rect x="0" y="300" width="16" height="6" rx="2"/>
      <rect x="0" y="330" width="16" height="6" rx="2"/>
      <rect x="0" y="360" width="16" height="6" rx="2"/>
    </g>
    <!-- Left Base Foot Plate -->
    <rect x="5" y="505" width="90" height="20" rx="4" fill="#1E293B" stroke="#475569" stroke-width="2"/>


    <!-- RIGHT ARCHWAY PILLAR -->
    <rect x="300" y="80" width="60" height="430" rx="4" fill="url(#gate-pillar)" stroke="#64748B" stroke-width="2"/>
    <rect x="295" y="80" width="12" height="430" fill="url(#gate-border)"/>
    <rect x="348" y="80" width="12" height="430" fill="url(#gate-border)"/>
    
    <!-- Right Multi-Zone Detection Indicator LEDs -->
    <g transform="translate(322, 100)" fill="#10B981">
      <rect x="0" y="0" width="16" height="6" rx="2"/>
      <rect x="0" y="30" width="16" height="6" rx="2"/>
      <rect x="0" y="60" width="16" height="6" rx="2"/>
      <rect x="0" y="90" width="16" height="6" rx="2"/>
      <rect x="0" y="120" width="16" height="6" rx="2"/>
      <rect x="0" y="150" width="16" height="6" rx="2"/>
      <rect x="0" y="180" width="16" height="6" rx="2"/>
      <rect x="0" y="210" width="16" height="6" rx="2"/>
      <rect x="0" y="240" width="16" height="6" rx="2"/>
      <rect x="0" y="270" width="16" height="6" rx="2"/>
      <rect x="0" y="300" width="16" height="6" rx="2"/>
      <rect x="0" y="330" width="16" height="6" rx="2"/>
      <rect x="0" y="360" width="16" height="6" rx="2"/>
    </g>
    <!-- Right Base Foot Plate -->
    <rect x="285" y="505" width="90" height="20" rx="4" fill="#1E293B" stroke="#475569" stroke-width="2"/>


    <!-- OVERHEAD CROSS BEAM & CONTROLLER -->
    <rect x="15" y="55" width="350" height="65" rx="6" fill="#1E293B" stroke="#475569" stroke-width="2"/>

    <!-- Central Control Module & LCD Screen -->
    <rect x="110" y="63" width="160" height="48" rx="4" fill="#0A0E17" stroke="#334155" stroke-width="1.5"/>
    <!-- Digital Counters: PASS / ALARM -->
    <text x="125" y="82" fill="#10B981" font-family="monospace" font-size="13" font-weight="bold">PASS: 0142</text>
    <text x="125" y="100" fill="#EF4444" font-family="monospace" font-size="13" font-weight="bold">ALARM: 000</text>
    <!-- Keypad Matrix Buttons on Module -->
    <g transform="translate(225, 68)" fill="#334155">
      <circle cx="5" cy="5" r="3"/>
      <circle cx="15" cy="5" r="3"/>
      <circle cx="25" cy="5" r="3"/>
      <circle cx="5" cy="15" r="3"/>
      <circle cx="15" cy="15" r="3"/>
      <circle cx="25" cy="15" r="3"/>
      <circle cx="5" cy="25" r="3"/>
      <circle cx="15" cy="25" r="3"/>
      <circle cx="25" cy="25" r="3"/>
    </g>

    <!-- Top-Mounted Thermal Screening Turret Camera -->
    <g transform="translate(165, 0)">
      <rect x="15" y="45" width="20" height="12" fill="#334155"/>
      <circle cx="25" cy="30" r="22" fill="url(#cam-housing)" stroke="#64748B" stroke-width="1.5"/>
      <!-- Dual Lens Face: Optical + Thermal -->
      <circle cx="20" cy="30" r="8" fill="#0F172A" stroke="#38BDF8" stroke-width="1.2"/>
      <circle cx="20" cy="30" r="4" fill="#0284C7"/>
      <circle cx="31" cy="30" r="5" fill="#0F172A" stroke="#F59E0B" stroke-width="1"/>
      <circle cx="31" cy="30" r="2" fill="#F59E0B"/>
    </g>
  </g>
</svg>'''


def get_wifi_camera_svg():
    return '''<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600" width="600" height="600" fill="none">
  <defs>
    <!-- Floor Shadow -->
    <ellipse cx="300" cy="525" rx="160" ry="20" fill="#000000" opacity="0.32" filter="blur(16px)"/>

    <!-- Clean White Plastic Gradients -->
    <linearGradient id="imou-body" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#FFFFFF"/>
      <stop offset="60%" stop-color="#F1F5F9"/>
      <stop offset="100%" stop-color="#CBD5E1"/>
    </linearGradient>

    <radialGradient id="dome-lens-glass" cx="40%" cy="35%" r="55%">
      <stop offset="0%" stop-color="#1E3A5F"/>
      <stop offset="45%" stop-color="#0B132B"/>
      <stop offset="100%" stop-color="#020617"/>
    </radialGradient>

    <linearGradient id="antenna-grad" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%" stop-color="#FFFFFF"/>
      <stop offset="50%" stop-color="#E2E8F0"/>
      <stop offset="100%" stop-color="#94A3B8"/>
    </linearGradient>
  </defs>

  <g transform="translate(100, 40)">
    <!-- Wall / Ceiling Mounting Base Bracket -->
    <rect x="150" y="20" width="100" height="50" rx="12" fill="#E2E8F0" stroke="#94A3B8" stroke-width="2"/>
    <path d="M 175 70 L 175 110 L 225 110 L 225 70 Z" fill="#CBD5E1"/>

    <!-- Dual External High-Gain Wi-Fi Antennas -->
    <!-- Left Antenna -->
    <g transform="translate(90, 80) rotate(-22)">
      <rect x="0" y="0" width="18" height="230" rx="9" fill="url(#antenna-grad)" stroke="#94A3B8" stroke-width="1.5"/>
      <circle cx="9" cy="220" r="12" fill="#E2E8F0" stroke="#94A3B8"/>
    </g>

    <!-- Right Antenna -->
    <g transform="translate(290, 75) rotate(22)">
      <rect x="0" y="0" width="18" height="230" rx="9" fill="url(#antenna-grad)" stroke="#94A3B8" stroke-width="1.5"/>
      <circle cx="9" cy="220" r="12" fill="#E2E8F0" stroke="#94A3B8"/>
    </g>

    <!-- Upper Main Housing (Fixed Camera Module) -->
    <path d="M 120 140 C 120 110, 280 110, 280 140 L 285 240 C 285 260, 115 260, 115 240 Z" fill="url(#imou-body)" stroke="#CBD5E1" stroke-width="2"/>

    <!-- Upper Fixed Lens Window & Spotlights -->
    <rect x="155" y="135" width="90" height="55" rx="14" fill="#0A0F1D" stroke="#334155" stroke-width="2"/>
    <!-- Upper Main Lens -->
    <circle cx="200" cy="162" r="16" fill="url(#dome-lens-glass)" stroke="#38BDF8" stroke-width="1.5"/>
    <circle cx="200" cy="162" r="8" fill="#000000"/>
    <!-- 4 White Spotlight LEDs -->
    <circle cx="168" cy="150" r="3.5" fill="#F8FAFC" stroke="#E2E8F0"/>
    <circle cx="168" cy="174" r="3.5" fill="#F8FAFC" stroke="#E2E8F0"/>
    <circle cx="232" cy="150" r="3.5" fill="#F8FAFC" stroke="#E2E8F0"/>
    <circle cx="232" cy="174" r="3.5" fill="#F8FAFC" stroke="#E2E8F0"/>

    <!-- "Imou" Brand Logo Printed on Body -->
    <text x="200" y="222" fill="#64748B" font-family="-apple-system, BlinkMacSystemFont, sans-serif" font-size="18" font-weight="900" letter-spacing="2" text-anchor="middle">Imou</text>

    <!-- Lower PTZ Motorized Dome Sphere -->
    <g transform="translate(200, 340)">
      <!-- Main Outer Rotating Ball -->
      <circle cx="0" cy="0" r="95" fill="url(#imou-body)" stroke="#94A3B8" stroke-width="2.5"/>

      <!-- Front Dark Bezel Window -->
      <ellipse cx="0" cy="0" rx="72" ry="76" fill="#0A0E1A" stroke="#1E293B" stroke-width="2"/>

      <!-- Lower PTZ Main 4K Lens -->
      <circle cx="0" cy="-6" r="36" fill="url(#dome-lens-glass)" stroke="#38BDF8" stroke-width="2.5"/>
      <circle cx="0" cy="-6" r="22" fill="#000000"/>
      <circle cx="0" cy="-6" r="10" fill="#0284C7" opacity="0.6"/>
      <circle cx="-6" cy="-12" r="5" fill="#FFFFFF" opacity="0.6"/>

      <!-- Red & Blue Active Alarm Warning Strobes -->
      <circle cx="-38" cy="22" r="6" fill="#EF4444" filter="drop-shadow(0 0 6px #EF4444)"/>
      <circle cx="38" cy="22" r="6" fill="#3B82F6" filter="drop-shadow(0 0 6px #3B82F6)"/>

      <!-- Circular IR Night-Vision Illuminator LEDs Array -->
      <circle cx="-50" cy="-20" r="3.5" fill="#475569"/>
      <circle cx="-42" cy="-45" r="3.5" fill="#475569"/>
      <circle cx="42" cy="-45" r="3.5" fill="#475569"/>
      <circle cx="50" cy="-20" r="3.5" fill="#475569"/>
      <circle cx="-25" cy="48" r="3.5" fill="#475569"/>
      <circle cx="25" cy="48" r="3.5" fill="#475569"/>
      <circle cx="0" cy="52" r="3.5" fill="#475569"/>
    </g>
  </g>
</svg>'''


def main():
    print("Starting product image generation...")

    # 1. CCTV Cameras
    render_svg_to_png_and_webp(
        get_cctv_bullet_svg(),
        base_name='cctv-bullet-transparent',
        alt_name='cctv_solution',
        width=800,
        height=600
    )

    # 2. Access Control & Time Attendance
    render_svg_to_png_and_webp(
        get_access_control_svg(),
        base_name='face-terminal-transparent',
        alt_name='access_controll_solution',
        width=600,
        height=600
    )

    # 3. Communication Systems
    render_svg_to_png_and_webp(
        get_communication_svg(),
        base_name='communication-systems-transparent',
        alt_name='comunication_solution',
        width=600,
        height=600
    )

    # 4. Smart Home
    render_svg_to_png_and_webp(
        get_smart_home_svg(),
        base_name='smart-doorbell-transparent',
        alt_name='smart_home_solution',
        width=600,
        height=600
    )

    # 5. Interactive Flat Panels
    render_svg_to_png_and_webp(
        get_interactive_panel_svg(),
        base_name='interactive-panel-transparent',
        alt_name='Interactive_panels_solution',
        width=600,
        height=600
    )

    # 6. Servers & Storage
    render_svg_to_png_and_webp(
        get_server_svg(),
        base_name='server-storage-transparent',
        alt_name='server_solution',
        width=600,
        height=600
    )

    # 7. Physical Security
    render_svg_to_png_and_webp(
        get_physical_security_svg(),
        base_name='physical-security-transparent',
        alt_name='phycical_security_solution',
        width=600,
        height=600
    )

    # 8. WiFi Cameras
    render_svg_to_png_and_webp(
        get_wifi_camera_svg(),
        base_name='wifi-camera-transparent',
        alt_name='wifi_camera_solution',
        width=600,
        height=600
    )

    print("All 8 solution image sets generated and deployed successfully!")

if __name__ == '__main__':
    main()
