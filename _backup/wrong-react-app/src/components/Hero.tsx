import React from 'react';
import { 
  ShieldCheck, 
  Download, 
  CheckCircle2, 
  Layers, 
  Camera, 
  Award,
  Lock
} from 'lucide-react';

interface HeroProps {
  onExploreProducts: () => void;
  onExplorePackages: () => void;
  onOpenInquiry: (subject?: string) => void;
}

export const Hero: React.FC<HeroProps> = ({
  onExploreProducts,
  onExplorePackages,
  onOpenInquiry
}) => {
  return (
    <section id="hero" className="relative pt-12 pb-20 overflow-hidden bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 border-b border-slate-900">
      
      {/* Subtle Background Glows */}
      <div className="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-blue-600/10 blur-[130px] pointer-events-none rounded-full" />
      <div className="absolute bottom-0 right-10 w-[400px] h-[300px] bg-cyan-600/5 blur-[100px] pointer-events-none rounded-full" />

      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
          
          {/* Left Column: Corporate Value Proposition */}
          <div className="lg:col-span-7 space-y-7 text-left">
            
            <div className="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900 border border-slate-700/80 text-blue-400 text-xs font-semibold shadow-inner">
              <ShieldCheck className="w-4 h-4 text-blue-400 shrink-0" />
              <span>Enterprise CCTV &amp; Surveillance Systems</span>
            </div>

            <h1 className="text-4xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight font-heading leading-[1.1]">
              Next-Gen Security Hardware.{' '}
              <span className="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-blue-500 to-cyan-400">
                Zero Monthly Fees.
              </span>
            </h1>

            <p className="text-base sm:text-lg text-slate-300 max-w-2xl leading-relaxed">
              Camnex manufactures industrial-grade 4K AI optical cameras, network video recorders (NVR), and turnkey commercial surveillance kits. Protect your facility with on-device neural edge detection, starlight ColorNight™ optics, and 100% private local recording.
            </p>

            {/* Corporate Value Pillars */}
            <div className="grid grid-cols-1 sm:grid-cols-2 gap-3.5 pt-1 text-xs text-slate-200">
              <div className="flex items-center gap-2.5">
                <CheckCircle2 className="w-4 h-4 text-emerald-400 shrink-0" />
                <span>Zero Subscription Paywalls Ever</span>
              </div>
              <div className="flex items-center gap-2.5">
                <CheckCircle2 className="w-4 h-4 text-emerald-400 shrink-0" />
                <span>On-Sensor Neural Human &amp; Car AI</span>
              </div>
              <div className="flex items-center gap-2.5">
                <CheckCircle2 className="w-4 h-4 text-emerald-400 shrink-0" />
                <span>Sony STARVIS 4K Ultra HD Sensors</span>
              </div>
              <div className="flex items-center gap-2.5">
                <CheckCircle2 className="w-4 h-4 text-emerald-400 shrink-0" />
                <span>NDAA Section 889 &amp; ONVIF Certified</span>
              </div>
            </div>

            {/* Action Buttons */}
            <div className="flex flex-wrap items-center gap-4 pt-3">
              <button
                onClick={onExploreProducts}
                id="hero-btn-products"
                className="px-6 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs uppercase tracking-wider shadow-xl shadow-blue-600/30 flex items-center gap-2 transition cursor-pointer"
              >
                <Camera className="w-4 h-4" />
                <span>Browse Cameras &amp; NVRs</span>
              </button>

              <button
                onClick={onExplorePackages}
                id="hero-btn-packages"
                className="px-6 py-3.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-slate-200 hover:text-white border border-slate-700 font-bold text-xs uppercase tracking-wider flex items-center gap-2 transition cursor-pointer"
              >
                <Layers className="w-4 h-4 text-blue-400" />
                <span>Turnkey Security Kits</span>
              </button>

              <button
                onClick={() => onOpenInquiry('Product Catalog & Corporate Pricing')}
                id="hero-btn-catalog"
                className="px-5 py-3.5 rounded-xl text-slate-400 hover:text-white text-xs font-semibold flex items-center gap-1.5 transition cursor-pointer"
              >
                <Download className="w-4 h-4 text-slate-400" />
                <span>Download Brochure</span>
              </button>
            </div>

            {/* Trust Badges */}
            <div className="pt-6 border-t border-slate-800/80 flex flex-wrap items-center gap-6 text-slate-400 text-xs font-medium">
              <div className="flex items-center gap-2">
                <Award className="w-4 h-4 text-amber-400" />
                <span>3-Year Hardware Warranty</span>
              </div>
              <div className="flex items-center gap-2">
                <Lock className="w-4 h-4 text-emerald-400" />
                <span>AES-256 Video Stream Encryption</span>
              </div>
              <div className="flex items-center gap-2">
                <ShieldCheck className="w-4 h-4 text-blue-400" />
                <span>500+ Certified Integrators</span>
              </div>
            </div>

          </div>

          {/* Right Column: Hero Visual Graphic */}
          <div className="lg:col-span-5">
            <div className="relative mx-auto max-w-lg rounded-2xl border border-slate-800 bg-slate-900/90 p-5 shadow-2xl backdrop-blur-sm">
              
              {/* Top Bar */}
              <div className="flex items-center justify-between pb-3 border-b border-slate-800 text-xs">
                <div className="flex items-center gap-2">
                  <div className="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></div>
                  <span className="font-mono text-white font-bold">TITAN 4K AI NVR SYSTEM</span>
                </div>
                <span className="text-[10px] font-mono bg-blue-950 text-blue-400 border border-blue-800 px-2 py-0.5 rounded">
                  CHANNEL 01 • ACTIVE
                </span>
              </div>

              {/* Main Visual Image */}
              <div className="relative mt-3 rounded-xl overflow-hidden aspect-[16/10] bg-slate-950">
                <img
                  src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=1000&q=80"
                  alt="Camnex Commercial CCTV Camera"
                  className="w-full h-full object-cover"
                />

                <div className="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-black/40"></div>

                {/* Simulated AI Recognition Boxes */}
                <div className="absolute top-8 left-12 w-28 h-32 border-2 border-emerald-400 rounded bg-emerald-500/10 flex flex-col justify-between p-1.5 pointer-events-none">
                  <span className="bg-emerald-500 text-slate-950 text-[9px] font-black px-1.5 py-0.5 rounded w-max">
                    PERSON • 99.4%
                  </span>
                  <span className="text-[8px] font-mono text-emerald-300">
                    ID: #8492 [TRACKED]
                  </span>
                </div>

                <div className="absolute bottom-4 left-4 right-4 flex items-center justify-between text-[11px] font-mono text-slate-300 bg-slate-900/90 backdrop-blur-md px-3 py-2 rounded-lg border border-slate-800">
                  <span className="text-emerald-400 font-bold flex items-center gap-1.5">
                    <span className="w-2 h-2 rounded-full bg-rose-500 animate-ping"></span>
                    REC • 4K UHD
                  </span>
                  <span>FPS: 30 • 4096 Kbps</span>
                  <span className="text-slate-400">STARVIS F1.4</span>
                </div>
              </div>

              {/* Quick Specs Pill Row */}
              <div className="mt-4 grid grid-cols-3 gap-2 text-center text-xs">
                <div className="p-2.5 rounded-lg bg-slate-950 border border-slate-800">
                  <div className="font-mono font-bold text-white">4K UHD</div>
                  <div className="text-[10px] text-slate-400">3840×2160 Pixels</div>
                </div>
                <div className="p-2.5 rounded-lg bg-slate-950 border border-slate-800">
                  <div className="font-mono font-bold text-emerald-400">0 Fees</div>
                  <div className="text-[10px] text-slate-400">Local Hard Drive</div>
                </div>
                <div className="p-2.5 rounded-lg bg-slate-950 border border-slate-800">
                  <div className="font-mono font-bold text-blue-400">IP67 / IK10</div>
                  <div className="text-[10px] text-slate-400">All-Weather Armor</div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>
  );
};
