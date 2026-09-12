import React from 'react';
import { SecurityPackage } from '../types';
import { PackageCard } from './PackageCard';
import { Layers } from 'lucide-react';

interface PackageSectionProps {
  packages: SecurityPackage[];
  onInquirePackage: (pkg: SecurityPackage) => void;
  onOpenInquiry: (subject?: string) => void;
}

export const PackageSection: React.FC<PackageSectionProps> = ({
  packages,
  onInquirePackage,
  onOpenInquiry
}) => {
  return (
    <section id="packages" className="py-20 bg-slate-900/60 border-b border-slate-900">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* Section Header */}
        <div className="text-center max-w-3xl mx-auto mb-16 space-y-4">
          <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-950/80 text-blue-400 text-xs font-bold uppercase tracking-wider border border-blue-800/60">
            <Layers className="w-3.5 h-3.5" />
            <span>Turnkey Systems</span>
          </div>

          <h2 className="text-3xl sm:text-4xl font-extrabold text-white tracking-tight font-heading">
            Pre-Engineered Complete CCTV Kits
          </h2>

          <p className="text-base text-slate-300 leading-relaxed">
            Eliminate guesswork. Each Camnex turnkey kit includes matched 4K cameras, dedicated Titan AI NVR, pre-installed surveillance hard drive, Cat6 PoE cabling, and free access to the Camnex View mobile and PC client.
          </p>
        </div>

        {/* 3 Package Cards */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
          {packages.map((pkg) => (
            <PackageCard
              key={pkg.id}
              securityPackage={pkg}
              onInquirePackage={onInquirePackage}
            />
          ))}
        </div>

        {/* Custom Configuration Notice */}
        <div className="mt-14 text-center p-6 rounded-2xl bg-slate-900 border border-slate-800 max-w-2xl mx-auto space-y-3">
          <h4 className="text-sm font-bold text-white">Need a Custom Channel Mix or Greater Storage?</h4>
          <p className="text-xs text-slate-300">
            Our surveillance engineers configure customized NVR channel expansions up to 128 channels and 120-day RAID storage for commercial facilities.
          </p>
          <button
            onClick={() => onOpenInquiry('Custom Surveillance Configuration')}
            className="text-xs font-bold text-blue-400 hover:text-blue-300 underline cursor-pointer"
          >
            Request Custom Channel Proposal →
          </button>
        </div>

      </div>
    </section>
  );
};
