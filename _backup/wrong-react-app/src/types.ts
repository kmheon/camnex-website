export interface Product {
  id: string;
  name: string;
  model: string;
  modelCode?: string;
  category: 'dome' | 'bullet' | 'ptz' | 'wireless' | 'nvr';
  badge?: string;
  tagline: string;
  price: number;
  originalPrice?: number;
  rating: number;
  reviewsCount: number;
  resolution: string;
  lens: string;
  nightVision: string;
  power: string;
  waterproof: string;
  features: string[];
  description: string;
  image: string;
  imageUrl?: string;
  inStock: boolean;
  specs: {
    sensor: string;
    compression: string;
    fieldOfView: string;
    audio: string;
    storage: string;
    connectivity: string;
  };
  sensor?: string;
  nightVisionRange?: string;
  lensFov?: string;
  weatherproofRating?: string;
  audioFeatures?: string;
  powerType?: string;
  aiFeatures?: string[];
}

export interface SecurityPackage {
  id: string;
  title: string;
  subtitle: string;
  description?: string;
  targetAudience: string;
  price: number;
  monthlyCloud?: number;
  isPopular?: boolean;
  includedCamerasCount: number;
  camerasDescription: string;
  camerasIncluded?: string;
  storageDescription: string;
  storageCapacity?: string;
  nvrModel?: string;
  retentionDays?: number;
  features: string[];
  idealFor: string[];
  warranty: string;
}

export interface CameraFeed {
  id: string;
  channel: string;
  location: string;
  cameraModel: string;
  status: 'ONLINE' | 'MOTION DETECTED' | 'STANDBY';
  fps: number;
  bitrate: string;
  resolution: string;
  nightVisionActive: boolean;
  ptzSupported: boolean;
  pan: number; // -180 to 180
  tilt: number; // -90 to 90
  zoom: number; // 1 to 10
}

export interface QuoteRequest {
  fullName: string;
  email: string;
  phone: string;
  propertyType: 'home' | 'commercial' | 'industrial' | 'retail';
  camerasNeeded: number;
  indoorCount: number;
  outdoorCount: number;
  needsCloudStorage: boolean;
  needsProfessionalInstallation: boolean;
  additionalNotes?: string;
}
