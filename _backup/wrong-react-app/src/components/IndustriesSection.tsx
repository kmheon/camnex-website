import React from 'react';
import { 
  Building, 
  Landmark, 
  ShoppingCart, 
  Factory, 
  Home, 
  GraduationCap, 
  HeartPulse,
  ArrowRight
} from 'lucide-react';

interface IndustriesSectionProps {
  onSelectIndustry: (name: string) => void;
}

export const IndustriesSection: React.FC<IndustriesSectionProps> = ({ onSelectIndustry }) => {
  const industries = [
    {
      icon: Factory,
      title: 'Logistics & Warehouses',
      description: 'High-bay auto-tracking PTZ cameras, loading dock monitor stations, and forklift collision deterrence zones.',
      keyFeature: 'AI Perimeter Tripwire & 25x Optical Zoom'
    },
    {
      icon: Landmark,
      title: 'Banking & Financial Institutions',
      description: 'Cash-teller 4K resolution, ATM vault anti-tamper sensors, and dual-authorization local RAID storage.',
      keyFeature: 'Bank-Grade AES-256 Encrypted Streams'
    },
    {
      icon: ShoppingCart,
      title: 'Retail Stores & Supermarkets',
      description: 'Loss prevention active deterrence, cashier transaction synchronization, and entrance customer analytics.',
      keyFeature: 'Face & Human Bipedal Classification'
    },
    {
      icon: Home,
      title: 'Gated Estates & Communities',
      description: 'License plate capture at entry barriers, perimeter fence infrared protection, and centralized resident app access.',
      keyFeature: 'Camnex View Multi-Tenant Live Access'
    },
    {
      icon: GraduationCap,
      title: 'Schools & Educational Campuses',
      description: 'Campus-wide perimeter coverage, playground safety zones, and rapid emergency response broadcaster integration.',
      keyFeature: 'High-Decibel Siren & Strobe Broadcast'
    },
    {
      icon: HeartPulse,
      title: 'Hospitals & Healthcare Facilities',
      description: 'Pharmacy inventory safeguarding, emergency room corridor oversight, and fully private local non-cloud storage.',
      keyFeature: '100% Private Local NVR Retention'
    }
  ];

  return (
    <section id="industries" className="py-20 bg-slate-950 border-b border-slate-900">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div className="text-center max-w-3xl mx-auto mb-16 space-y-4">
          <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-950/80 text-blue-400 text-xs font-bold uppercase tracking-wider border border-blue-800/60">
            <Building className="w-3.5 h-3.5" />
            <span>Tailored Sector Applications</span>
          </div>

          <h2 className="text-3xl sm:text-4xl font-extrabold text-white tracking-tight font-heading">
            Surveillance Solutions by Industry
          </h2>

          <p className="text-base text-slate-300 leading-relaxed">
            Every operational environment has unique security challenges. Discover how Camnex surveillance architectures deliver precision protection across diverse sectors.
          </p>
        </div>

        {/* 6 Industry Cards */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {industries.map((ind, idx) => {
            const Icon = ind.icon;
            return (
              <div
                key={idx}
                className="group p-6 rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-blue-500/50 hover:bg-slate-900 transition-all duration-300 flex flex-col justify-between space-y-4 shadow-lg"
              >
                <div className="space-y-3">
                  <div className="w-12 h-12 rounded-xl bg-blue-600/15 border border-blue-500/30 flex items-center justify-center text-blue-400 group-hover:scale-105 transition-transform">
                    <Icon className="w-6 h-6" />
                  </div>

                  <h3 className="text-lg font-bold text-white font-heading group-hover:text-blue-400 transition-colors">
                    {ind.title}
                  </h3>

                  <p className="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    {ind.description}
                  </p>
                </div>

                <div className="pt-4 border-t border-slate-800/80 flex items-center justify-between">
                  <span className="text-[11px] font-semibold text-emerald-400">
                    {ind.keyFeature}
                  </span>
                  <button
                    onClick={() => onSelectIndustry(ind.title)}
                    className="text-xs font-bold text-blue-400 hover:text-blue-300 flex items-center gap-1 cursor-pointer"
                  >
                    <span>Inquire</span>
                    <ArrowRight className="w-3.5 h-3.5" />
                  </button>
                </div>
              </div>
            );
          })}
        </div>

      </div>
    </section>
  );
};
