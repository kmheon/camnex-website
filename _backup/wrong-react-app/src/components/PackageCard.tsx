import React from 'react';
import { SecurityPackage } from '../types';
import { 
  Check, 
  Camera, 
  HardDrive, 
  Calendar, 
  Mail,
  ChevronRight
} from 'lucide-react';

interface PackageCardProps {
  securityPackage: SecurityPackage;
  onInquirePackage: (pkg: SecurityPackage) => void;
}

export const PackageCard: React.FC<PackageCardProps> = ({
  securityPackage: pkg,
  onInquirePackage
}) => {
  const isPopular = pkg.isPopular;
  const descriptionText = pkg.description || pkg.subtitle;
  const camerasText = pkg.camerasIncluded || pkg.camerasDescription;
  const storageText = pkg.storageCapacity || pkg.storageDescription;
  const nvrText = pkg.nvrModel || 'Titan Dedicated 4K AI NVR';
  const retentionDaysText = pkg.retentionDays || 30;

  return (
    <div 
      className={`relative rounded-2xl flex flex-col justify-between transition-all duration-300 ${
        isPopular 
          ? 'bg-slate-900 border-2 border-blue-500 shadow-2xl shadow-blue-500/10 -translate-y-2' 
          : 'bg-slate-900/80 border border-slate-800 hover:border-slate-700'
      }`}
    >
      {/* Popular Ribbon */}
      {isPopular && (
        <div className="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-gradient-to-r from-blue-600 to-cyan-600 text-white text-[10px] font-black uppercase tracking-widest px-4 py-1 rounded-full shadow-md">
          Most Popular Solution
        </div>
      )}

      {/* Card Header */}
      <div className="p-6 sm:p-7 border-b border-slate-800/80 space-y-4">
        <div className="space-y-1">
          <span className="text-[11px] font-bold uppercase tracking-wider text-blue-400">
            {pkg.targetAudience}
          </span>
          <h3 className="text-xl font-extrabold text-white font-heading">
            {pkg.title}
          </h3>
          <p className="text-xs text-slate-300 leading-relaxed min-h-[36px]">
            {descriptionText}
          </p>
        </div>

        {/* Pricing */}
        <div className="pt-2 flex items-baseline gap-2">
          <span className="text-3xl sm:text-4xl font-black text-white font-mono font-heading">
            ${pkg.price}
          </span>
          <span className="text-xs text-slate-400">Complete Kit MSRP</span>
        </div>

        <div className="text-[11px] text-emerald-400 font-semibold bg-emerald-950/40 border border-emerald-900/60 px-3 py-1.5 rounded-lg flex items-center gap-1.5">
          <span>✓ 0 Monthly Fees • 100% On-Premise Storage</span>
        </div>
      </div>

      {/* Kit Specifications Details */}
      <div className="p-6 sm:p-7 space-y-5 flex-1">
        <div className="space-y-2 text-xs">
          <div className="flex items-center gap-2 text-slate-200">
            <Camera className="w-4 h-4 text-blue-400 shrink-0" />
            <span className="font-semibold text-white">{pkg.includedCamerasCount} Channels Included:</span>
            <span className="text-slate-300 truncate">{camerasText}</span>
          </div>
          <div className="flex items-center gap-2 text-slate-200">
            <HardDrive className="w-4 h-4 text-emerald-400 shrink-0" />
            <span className="font-semibold text-white">{nvrText}:</span>
            <span className="text-slate-300 truncate">{storageText}</span>
          </div>
          <div className="flex items-center gap-2 text-slate-200">
            <Calendar className="w-4 h-4 text-amber-400 shrink-0" />
            <span className="font-semibold text-white">Continuous Retention:</span>
            <span className="text-slate-300">~{retentionDaysText} Days 24/7 Recording</span>
          </div>
        </div>

        <div className="border-t border-slate-800/80 pt-4 space-y-2.5">
          <span className="text-[11px] font-bold text-slate-400 uppercase tracking-wider block">
            What's Included in This Package:
          </span>
          <ul className="space-y-2 text-xs text-slate-300">
            {pkg.features.map((feature, idx) => (
              <li key={idx} className="flex items-start gap-2">
                <Check className="w-4 h-4 text-blue-400 shrink-0 mt-0.5" />
                <span>{feature}</span>
              </li>
            ))}
          </ul>
        </div>
      </div>

      {/* Card Action */}
      <div className="p-6 sm:p-7 pt-0">
        <button
          onClick={() => onInquirePackage(pkg)}
          className={`w-full py-3.5 rounded-xl font-bold text-xs uppercase tracking-wider flex items-center justify-center gap-2 transition cursor-pointer ${
            isPopular
              ? 'bg-blue-600 hover:bg-blue-500 text-white shadow-lg shadow-blue-600/30'
              : 'bg-slate-800 hover:bg-slate-700 text-white border border-slate-700'
          }`}
        >
          <Mail className="w-4 h-4" />
          <span>Inquire for This Kit</span>
          <ChevronRight className="w-4 h-4 ml-1" />
        </button>
      </div>

    </div>
  );
};
