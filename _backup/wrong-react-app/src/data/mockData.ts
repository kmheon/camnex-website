import { Product, SecurityPackage, CameraFeed } from '../types';

export const PRODUCTS: Product[] = [
  {
    id: 'nx-dome-4k',
    name: 'Camnex Sentinel 4K AI Dome',
    model: 'NX-DM800-AI',
    modelCode: 'NX-DM800-AI',
    category: 'dome',
    badge: 'Best Seller',
    tagline: 'Vandal-proof indoor/outdoor dome with neural human & vehicle classification.',
    price: 189,
    originalPrice: 229,
    rating: 4.9,
    reviewsCount: 142,
    resolution: '4K Ultra HD (3840×2160 @ 30fps)',
    lens: '2.8mm Fixed Wide-Angle (112° FOV)',
    nightVision: 'ColorNight™ Gen 3 (Up to 40m / 130ft)',
    power: 'PoE (802.3af) / 12V DC',
    waterproof: 'IP67 Weatherproof & IK10 Vandal-Proof',
    features: [
      'Edge AI Person & Vehicle Classification',
      'Two-Way Audio with Noise Cancellation',
      'H.265+ Smart Codec saves 75% bandwidth',
      'MicroSD slot up to 512GB & ONVIF Profile S/G/T'
    ],
    description: 'The Sentinel 4K AI Dome camera is designed for seamless ceiling and soffit integration. Featuring a reinforced IK10 vandal-resistant dome housing, it provides round-the-clock defense against tampering and extreme weather. Built-in neural processing filters out false triggers like rain and shadows.',
    image: 'https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=800&q=80',
    imageUrl: 'https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=800&q=80',
    inStock: true,
    sensor: '1/1.8" Sony STARVIS CMOS',
    nightVisionRange: 'Up to 40m / 130ft ColorNight™',
    lensFov: '112° Wide-Angle FOV',
    weatherproofRating: 'IP67 & IK10 Vandal-Proof',
    audioFeatures: 'Built-in Mic & Speaker (Full Duplex)',
    powerType: 'Power over Ethernet (PoE 802.3af)',
    aiFeatures: ['Human Detection', 'Vehicle Classification', 'Tripwire Intrusion', 'Face Snap'],
    specs: {
      sensor: '1/1.8" Progressive Scan Starlight CMOS',
      compression: 'H.265+ / H.265 / H.264+ / MJPEG',
      fieldOfView: '112° Horizontal, 60° Vertical, 131° Diagonal',
      audio: 'Built-in Mic & Speaker (Full-Duplex)',
      storage: 'Internal MicroSD (up to 512GB), NAS, NVR, Cloud',
      connectivity: 'RJ-45 10/100M Ethernet (PoE 802.3af)'
    }
  },
  {
    id: 'nx-bullet-pro',
    name: 'Camnex Falcon Long-Range Bullet',
    model: 'NX-BL900-LR',
    modelCode: 'NX-BL900-LR',
    category: 'bullet',
    badge: 'Active Deterrence',
    tagline: 'Perimeter defense powerhouse with strobe beacon and 110dB siren.',
    price: 219,
    originalPrice: 259,
    rating: 4.8,
    reviewsCount: 98,
    resolution: '4K Starlight Ultra (3840×2160)',
    lens: '4mm Precision Glass Lens (88° FOV)',
    nightVision: 'Matrix IR + Warm Spotlight (60m / 200ft)',
    power: 'PoE+ / 12V DC',
    waterproof: 'IP67 All-Weather Aluminum Alloy',
    features: [
      'Red & Blue Flashing Warning Strobes',
      '110dB Siren / Custom Voice Alerts',
      'Smart Perimeter Line Crossing Detection',
      'Heavy-duty Anti-Glare Sun Shield'
    ],
    description: 'Engineered for driveway, perimeter fence, and warehouse boundary protection, the Falcon Long-Range Bullet stops intruders before they reach your doors. When a human or vehicle crosses your defined boundary, active deterrence lights activate instantly with sound warnings.',
    image: 'https://images.unsplash.com/photo-1549465220-1a8b9238cd48?auto=format&fit=crop&w=800&q=80',
    imageUrl: 'https://images.unsplash.com/photo-1549465220-1a8b9238cd48?auto=format&fit=crop&w=800&q=80',
    inStock: true,
    sensor: '1/1.8" Sony STARVIS II Sensor',
    nightVisionRange: 'Up to 60m / 200ft Starlight Matrix',
    lensFov: '88° Long-Range Glass Lens',
    weatherproofRating: 'IP67 All-Weather Cast Aluminum',
    audioFeatures: '110dB Warning Siren + Two-Way Mic',
    powerType: 'PoE+ (802.3at) / 12V DC',
    aiFeatures: ['Perimeter Fence Tripwire', 'Active Strobe Deterrence', 'Vehicle Recognition', 'Loitering Alert'],
    specs: {
      sensor: '1/1.8" Starlight CMOS Matrix',
      compression: 'H.265+ / H.265 / H.264',
      fieldOfView: '88° Horizontal, 48° Vertical',
      audio: 'High-Decibel Siren + Two-Way Audio',
      storage: 'MicroSD (up to 512GB), NVR, RTSP Stream',
      connectivity: 'PoE+ (802.3at) / 12V DC'
    }
  },
  {
    id: 'nx-ptz-360',
    name: 'Camnex Apex 360° Speed Dome PTZ',
    model: 'NX-PTZ25X-AI',
    modelCode: 'NX-PTZ25X-AI',
    category: 'ptz',
    badge: 'Enterprise Flagship',
    tagline: 'Endless 360° pan, 25x optical zoom, and autonomous target auto-tracking.',
    price: 489,
    originalPrice: 579,
    rating: 4.95,
    reviewsCount: 64,
    resolution: '4K Ultra HD with 25x Optical Zoom',
    lens: '4.8mm - 120mm Motorized Varifocal',
    nightVision: 'Laser Infrared Illumination (150m / 500ft)',
    power: 'Hi-PoE (60W) / 24V AC',
    waterproof: 'IP67 & NEMA 4X Heavy Industrial',
    features: [
      '25x Optical Zoom + 16x Digital Zoom',
      'AI Deep Learning Auto-Tracking 3.0',
      'Endless 360° Continuous High-Speed Pan',
      '300 Presets, 8 Patrol Tours, Auto-Scan'
    ],
    description: 'The Apex 360° Speed Dome combines raw optical zoom with next-gen autonomous auto-tracking. When an intruder enters the zone, the camera automatically pans, tilts, and zooms in with laser IR illumination to read license plates and facial details up to 500 feet away.',
    image: 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80',
    imageUrl: 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80',
    inStock: true,
    sensor: '1/2.8" STARVIS Optical Core',
    nightVisionRange: 'Up to 150m / 500ft Laser Matrix IR',
    lensFov: '25x Motorized Optical Zoom',
    weatherproofRating: 'IP67 & NEMA 4X Heavy Industrial',
    audioFeatures: 'Two-Way Audio + Alarm I/O Terminals',
    powerType: 'Hi-PoE (60W) / 24V AC',
    aiFeatures: ['AI Auto-Tracking 3.0', 'License Plate Recognition', 'Auto-Patrol Scanning', 'Perimeter Tripwire'],
    specs: {
      sensor: '1/2.8" Progressive Scan STARVIS CMOS',
      compression: 'H.265+ / H.265 / H.264',
      fieldOfView: '58.5° (Wide) to 2.8° (Tele)',
      audio: '1 in / 1 out Audio Interface',
      storage: 'MicroSD (up to 512GB), NVR SAN Storage',
      connectivity: 'Hi-PoE (60W) / 1000M Gigabit'
    }
  },
  {
    id: 'nx-solar-4g',
    name: 'Camnex Nomad 4G LTE Solar Camera',
    model: 'NX-SLR400-LTE',
    modelCode: 'NX-SLR400-LTE',
    category: 'wireless',
    badge: '100% Wire-Free',
    tagline: 'Off-grid surveillance with integrated solar panel, battery, and 4G SIM.',
    price: 329,
    originalPrice: 389,
    rating: 4.7,
    reviewsCount: 53,
    resolution: '2K Super HD (2560×1440)',
    lens: '3.6mm Wide-Angle (105° FOV)',
    nightVision: 'Full-Color Night Vision with dual spotlights',
    power: '80W Monocrystalline Solar + 20,000mAh Battery',
    waterproof: 'IP66 Weatherproof',
    features: [
      'Built-in 4G LTE Cellular Modem (No Wi-Fi needed)',
      'High-efficiency 80W Solar Panel included',
      'PIR + Radar Dual-Sensor Zero-False-Alarm Sleep Mode',
      'GPS Location Tracking & Anti-Theft Mounting'
    ],
    description: 'Designed for construction sites, remote farms, oil fields, and vacation properties without power or internet lines. The Nomad charges continuously via high-efficiency monocrystalline solar panels and streams live footage directly to your smartphone via 4G LTE.',
    image: 'https://images.unsplash.com/photo-1508873696983-2df5293cb395?auto=format&fit=crop&w=800&q=80',
    imageUrl: 'https://images.unsplash.com/photo-1508873696983-2df5293cb395?auto=format&fit=crop&w=800&q=80',
    inStock: true,
    sensor: '1/3" Low-Light Starlight CMOS',
    nightVisionRange: 'Up to 30m / 100ft Spotlight Color',
    lensFov: '105° Wide-Angle FOV',
    weatherproofRating: 'IP66 Outdoor Rated',
    audioFeatures: 'Two-Way Intercom System',
    powerType: 'Solar Powered + Internal Lithium Bank',
    aiFeatures: ['PIR + Radar Dual Detection', 'Cellular Push Alerts', 'Time-Lapse Construction Mode', 'GPS Tracking'],
    specs: {
      sensor: '1/3" Low-Light Starlight CMOS',
      compression: 'H.265 / H.264',
      fieldOfView: '105° Horizontal',
      audio: 'Two-Way Intercom with Echo Cancellation',
      storage: 'Internal MicroSD & Cloud Backup',
      connectivity: '4G LTE (Global Bands) / Micro SIM'
    }
  },
  {
    id: 'nx-nvr-titan',
    name: 'Camnex Titan 16-Channel 4K AI NVR',
    model: 'NX-NVR16-4K',
    modelCode: 'NX-NVR16-4K',
    category: 'nvr',
    badge: 'Neural Hub',
    tagline: 'Enterprise-grade PoE recorder with 160Mbps bandwidth and local AI search.',
    price: 399,
    originalPrice: 479,
    rating: 4.9,
    reviewsCount: 88,
    resolution: 'Supports up to 16x 4K UHD Streams',
    lens: 'N/A (Recording Hub)',
    nightVision: 'N/A',
    power: 'Internal 200W PoE Power Supply',
    waterproof: 'Indoor 1U Rackmount / Desktop Chassis',
    features: [
      '16x Built-in Independent PoE+ Ports',
      'Dual SATA Bays (Up to 32TB Storage)',
      'Zero Cloud Fees — 100% On-Premise Encrypted',
      'Smart Face, Vehicle & License Plate Search'
    ],
    description: 'The Titan 16-Channel AI NVR is the central command station for your security ecosystem. It powers up to 16 cameras via a single Ethernet cable each, stores months of continuous 4K footage without monthly fees, and lets you search recorded video by person or vehicle in seconds.',
    image: 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=80',
    imageUrl: 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=80',
    inStock: true,
    sensor: 'Dual-Core Surveillance SoC',
    nightVisionRange: 'Supports All Connected Night Vision Cams',
    lensFov: 'Supports Up to 16 Channels',
    weatherproofRating: '1U Rackmount Steel Chassis',
    audioFeatures: 'RCA In/Out + HDMI 4K Audio',
    powerType: '100-240V AC Internal Supply',
    aiFeatures: ['Smart Target Search', 'Facial Recognition Library', 'Vehicle Database', 'Instant Evidence Export'],
    specs: {
      sensor: 'Dual-Core Surveillance SoC',
      compression: 'H.265+ / H.265 / H.264+ / H.264',
      fieldOfView: '16 Channels Concurrent Preview',
      audio: '1x RCA Audio In, 1x RCA Audio Out',
      storage: '2x SATA Ports (Up to 16TB each, 32TB max)',
      connectivity: '16x PoE Ports + 1x Gigabit WAN Port'
    }
  }
];

export const PACKAGES: SecurityPackage[] = [
  {
    id: 'pkg-home-essential',
    title: 'Home Shield Essential',
    subtitle: 'Crisp 4K protection for apartments, suburban homes, and entryways.',
    description: 'Crisp 4K protection for apartments, suburban homes, and entryways with zero monthly fees.',
    targetAudience: 'Residential & Small Spaces',
    price: 449,
    monthlyCloud: 0,
    includedCamerasCount: 2,
    camerasIncluded: '2x 4K AI Dome Cameras with Color Night Vision',
    camerasDescription: '2x 4K AI Dome Cameras with Color Night Vision',
    storageCapacity: '1TB Western Digital Purple HDD',
    nvrModel: 'Titan 4-Channel PoE NVR',
    retentionDays: 30,
    storageDescription: '1TB Pre-installed Security-Grade HDD (30+ Days Retention)',
    features: [
      '2x 4K AI Dome Cameras with two-way audio',
      '4-Channel Smart NVR Hub with built-in PoE ports',
      'Free Camnex View iOS & Android Mobile App',
      'Instant Smartphone Push Notifications & Live Stream',
      'Zero Monthly Subscription Fees required forever',
      'Pre-terminated Cat6 PoE Cabling & Mounting Hardware'
    ],
    idealFor: ['Townhomes', 'Single Family Houses', 'Front & Backyard Security'],
    warranty: '2-Year Replacement Warranty & Lifetime Tech Support'
  },
  {
    id: 'pkg-business-pro',
    title: 'Business Guard Pro',
    subtitle: 'Commercial-grade surveillance engineered for retail, offices, and warehouses.',
    description: 'Commercial-grade surveillance engineered for retail, offices, and warehouses with perimeter deterrence.',
    targetAudience: 'Commercial & Retail',
    price: 899,
    isPopular: true,
    includedCamerasCount: 4,
    camerasIncluded: '2x 4K AI Dome + 2x Falcon Long-Range Active Deterrence Bullets',
    camerasDescription: '2x 4K AI Dome + 2x Falcon Long-Range Active Deterrence Bullets',
    storageCapacity: '4TB Western Digital Purple HDD',
    nvrModel: 'Titan 8-Channel PoE NVR',
    retentionDays: 60,
    storageDescription: '4TB Western Digital Purple Surveillance HDD (60+ Days)',
    features: [
      '4x Ultra 4K Commercial Cameras (Mix of Dome & Bullet)',
      '8-Channel Titan 4K PoE NVR with AI Analytics',
      'Active Deterrence Strobes & Sirens on perimeter',
      'Human & Vehicle Smart Filtering (Zero false alarms)',
      'Multi-User Access with Role Permissions for Managers',
      'Remote Web & Desktop VMS Station for Windows/Mac'
    ],
    idealFor: ['Retail Stores', 'Offices & Co-working', 'Restaurants & Cafes', 'Workshops'],
    warranty: '3-Year Commercial Warranty with Advanced Hardware Replacement'
  },
  {
    id: 'pkg-enterprise-fortress',
    title: 'Enterprise Fortress Suite',
    subtitle: 'Uncompromising multi-acre surveillance with AI Auto-Tracking PTZ and 16-channel brain.',
    description: 'Uncompromising multi-acre surveillance with AI Auto-Tracking PTZ and 16-channel Titan brain.',
    targetAudience: 'Industrial & Large Estates',
    price: 1899,
    includedCamerasCount: 8,
    camerasIncluded: '1x Apex 360° 25x PTZ + 4x Falcon Bullets + 3x 4K Dome Cameras',
    camerasDescription: '1x Apex 360° 25x PTZ + 4x Falcon Bullets + 3x 4K Dome Cameras',
    storageCapacity: '12TB RAID Enterprise Storage',
    nvrModel: 'Titan 16-Channel AI NVR',
    retentionDays: 90,
    storageDescription: '12TB RAID Storage with Hot Spare Protection (90+ Days)',
    features: [
      '8x Commercial AI Cameras + 1x Auto-Tracking 25x PTZ',
      '16-Channel Titan AI NVR with Face & Vehicle Database',
      'Dual HDMI Multi-Monitor Security Station Ready',
      'Perimeter Fence Tripwire & Intrusion Zones',
      'UPS Backup Power Surge Protection Module',
      'Dedicated Priority Enterprise Support Engineer'
    ],
    idealFor: ['Warehouses & Logistics', 'Car Dealerships', 'Manufacturing Plants', 'Gated Estates'],
    warranty: '5-Year Premier On-Site Warranty & Quarterly Health Checks'
  }
];

export const LIVE_CAMERAS: CameraFeed[] = [
  {
    id: 'feed-01',
    channel: 'CAM 01',
    location: 'Main Gate & Driveway',
    cameraModel: 'Falcon NX-BL900-LR',
    status: 'ONLINE',
    fps: 30,
    bitrate: '4.2 Mbps',
    resolution: '3840×2160 (4K)',
    nightVisionActive: false,
    ptzSupported: false,
    pan: 0,
    tilt: 0,
    zoom: 1
  },
  {
    id: 'feed-02',
    channel: 'CAM 02',
    location: 'Warehouse Perimeter North',
    cameraModel: 'Apex NX-PTZ25X-AI',
    status: 'MOTION DETECTED',
    fps: 30,
    bitrate: '5.8 Mbps',
    resolution: '3840×2160 (4K)',
    nightVisionActive: true,
    ptzSupported: true,
    pan: 45,
    tilt: -15,
    zoom: 4
  },
  {
    id: 'feed-03',
    channel: 'CAM 03',
    location: 'Front Office Reception',
    cameraModel: 'Sentinel NX-DM800-AI',
    status: 'ONLINE',
    fps: 30,
    bitrate: '3.6 Mbps',
    resolution: '3840×2160 (4K)',
    nightVisionActive: false,
    ptzSupported: false,
    pan: 0,
    tilt: 0,
    zoom: 1
  },
  {
    id: 'feed-04',
    channel: 'CAM 04',
    location: 'Rear Loading Dock & Alley',
    cameraModel: 'Falcon NX-BL900-LR',
    status: 'ONLINE',
    fps: 25,
    bitrate: '3.9 Mbps',
    resolution: '3840×2160 (4K)',
    nightVisionActive: true,
    ptzSupported: false,
    pan: 0,
    tilt: 0,
    zoom: 1
  }
];

export const FAQS = [
  {
    q: 'Are there really zero monthly subscription fees with Camnex systems?',
    a: 'Yes, absolutely zero. Unlike consumer cameras that require costly monthly cloud storage fees, all Camnex systems store footage locally onto internal surveillance-grade hard drives. You own your video footage 100% and remote viewing via the Camnex View mobile app is free for life.'
  },
  {
    q: 'How does remote viewing work if there are no cloud fees?',
    a: 'Camnex systems use high-speed secure P2P (Peer-to-Peer) technology. Each NVR has a unique encrypted Cloud ID and QR code. Simply scan the QR code using the Camnex View mobile app on iOS or Android, and you will have encrypted live streaming and playback without complicated router port forwarding.'
  },
  {
    q: 'What happens if our facility internet goes down?',
    a: 'Your cameras continue to record 24/7 without interruption. Because recording is handled locally by the on-premise Titan NVR and hard drives, internet outages do not stop your surveillance or AI detection.'
  },
  {
    q: 'Are Camnex cameras compliant with government and enterprise regulations?',
    a: 'Yes. Camnex cameras and recorders are NDAA Section 889 compliant, manufactured in ISO 9001:2015 certified facilities, and adhere strictly to ONVIF Profile S/G/T specifications for interoperability with third-party VMS platforms like Synology, Blue Iris, and Milestone.'
  },
  {
    q: 'Can I become an authorized dealer or installer for Camnex?',
    a: 'Yes! We have an active System Integrator & Dealer Program with wholesale volume pricing, marketing collateral, demo kits, and certified installer training. Please use the contact form on our website to apply.'
  }
];
