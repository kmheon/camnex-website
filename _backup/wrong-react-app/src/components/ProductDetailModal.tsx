import React, { useState } from 'react';
import { Product } from '../types';
import { 
  X, 
  Download, 
  CheckCircle2, 
  Star, 
  Cpu, 
  Mail
} from 'lucide-react';

interface ProductDetailModalProps {
  product: Product | null;
  onClose: () => void;
  onInquire: (product: Product) => void;
}

export const ProductDetailModal: React.FC<ProductDetailModalProps> = ({
  product,
  onClose,
  onInquire
}) => {
  const [downloaded, setDownloaded] = useState(false);

  if (!product) return null;

  const model = product.modelCode || product.model;
  const image = product.imageUrl || product.image;
  const sensor = product.sensor || product.specs?.sensor || '1/1.8" STARVIS Optical Sensor';
  const nightVision = product.nightVisionRange || product.nightVision;
  const lens = product.lensFov || product.lens;
  const waterproof = product.weatherproofRating || product.waterproof;
  const audio = product.audioFeatures || product.specs?.audio || 'Full-Duplex Two-Way Audio';
  const power = product.powerType || product.power;
  const aiList = product.aiFeatures || product.features;

  const handleDownloadDatasheet = () => {
    // Generate a downloadable text datasheet
    const content = `CAMNEX INNOVATIONS - OFFICIAL TECHNICAL DATASHEET
MODEL CODE: ${model}
PRODUCT NAME: ${product.name}
CATEGORY: ${product.category.toUpperCase()}
MSRP: $${product.price}

RESOLUTION: ${product.resolution}
IMAGE SENSOR: ${sensor}
NIGHT VISION RANGE: ${nightVision}
FIELD OF VIEW (FOV): ${lens}
WEATHERPROOF / INGRESS: ${waterproof}
AUDIO CODECS: ${audio}
POWER: ${power}
AI CAPABILITIES: ${aiList.join(', ')}

OVERVIEW:
${product.description}

COMPLIANCE:
NDAA Section 889 Compliant
ONVIF Profile S / G / T
ISO 9001:2015 Quality Verified
`;

    const blob = new Blob([content], { type: 'text/plain;charset=utf-8' });
    const url = URL.createObjectURL(blob);
    const link = document.createElement('a');
    link.href = url;
    link.download = `Camnex_${model}_Datasheet.txt`;
    link.click();
    URL.revokeObjectURL(url);
    setDownloaded(true);
    setTimeout(() => setDownloaded(false), 3000);
  };

  return (
    <div className="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/80 backdrop-blur-sm overflow-y-auto">
      <div 
        className="relative w-full max-w-3xl rounded-2xl bg-slate-900 border border-slate-800 shadow-2xl overflow-hidden my-8"
        onClick={(e) => e.stopPropagation()}
      >
        {/* Modal Header */}
        <div className="flex items-center justify-between p-5 sm:p-6 border-b border-slate-800 bg-slate-950/60">
          <div className="flex items-center gap-2">
            <span className="font-mono text-xs text-blue-400 bg-blue-950/80 px-2.5 py-1 rounded border border-blue-900">
              {model}
            </span>
            <span className="text-xs text-slate-400 font-semibold uppercase tracking-wider">
              {product.category} Camera Datasheet
            </span>
          </div>

          <button
            onClick={onClose}
            className="p-2 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition cursor-pointer"
          >
            <X className="w-5 h-5" />
          </button>
        </div>

        {/* Modal Body */}
        <div className="p-6 sm:p-8 space-y-6 max-h-[75vh] overflow-y-auto">
          
          <div className="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">
            
            {/* Image */}
            <div className="md:col-span-5 rounded-xl overflow-hidden bg-slate-950 border border-slate-800 aspect-[4/3]">
              <img
                src={image}
                alt={product.name}
                className="w-full h-full object-cover"
              />
            </div>

            {/* Basic Info */}
            <div className="md:col-span-7 space-y-3">
              <div className="flex items-center justify-between">
                <div className="flex items-center gap-1 text-amber-400 text-xs">
                  <Star className="w-3.5 h-3.5 fill-amber-400" />
                  <span className="font-semibold">{product.rating}</span>
                  <span className="text-slate-400">({product.reviewsCount} verified reviews)</span>
                </div>
                <span className="text-xl font-bold text-white font-mono font-heading">
                  ${product.price}
                </span>
              </div>

              <h2 className="text-2xl font-bold text-white font-heading">
                {product.name}
              </h2>

              <p className="text-xs sm:text-sm text-slate-300 leading-relaxed">
                {product.description}
              </p>

              <div className="pt-2 flex flex-wrap gap-2">
                <span className="px-2.5 py-1 rounded-md bg-emerald-950/60 border border-emerald-800 text-emerald-400 text-[11px] font-semibold">
                  ✓ In Stock &amp; Ready to Ship
                </span>
                <span className="px-2.5 py-1 rounded-md bg-blue-950/60 border border-blue-800 text-blue-400 text-[11px] font-semibold">
                  ✓ 3-Year Warranty
                </span>
                <span className="px-2.5 py-1 rounded-md bg-slate-800 text-slate-300 text-[11px] font-semibold">
                  ✓ NDAA Compliant
                </span>
              </div>
            </div>

          </div>

          {/* Technical Specifications Table */}
          <div className="space-y-3">
            <h3 className="text-sm font-bold text-white font-heading uppercase tracking-wider flex items-center gap-2">
              <Cpu className="w-4 h-4 text-blue-400" />
              <span>Full Engineering Specifications</span>
            </h3>

            <div className="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
              <div className="p-3 rounded-xl bg-slate-950 border border-slate-800/80">
                <span className="text-slate-400 block text-[10px] uppercase">Optical Sensor</span>
                <span className="text-white font-semibold">{sensor}</span>
              </div>

              <div className="p-3 rounded-xl bg-slate-950 border border-slate-800/80">
                <span className="text-slate-400 block text-[10px] uppercase">Resolution &amp; FPS</span>
                <span className="text-white font-semibold">{product.resolution}</span>
              </div>

              <div className="p-3 rounded-xl bg-slate-950 border border-slate-800/80">
                <span className="text-slate-400 block text-[10px] uppercase">Night Vision</span>
                <span className="text-white font-semibold">{nightVision}</span>
              </div>

              <div className="p-3 rounded-xl bg-slate-950 border border-slate-800/80">
                <span className="text-slate-400 block text-[10px] uppercase">Lens Angle (FOV)</span>
                <span className="text-white font-semibold">{lens}</span>
              </div>

              <div className="p-3 rounded-xl bg-slate-950 border border-slate-800/80">
                <span className="text-slate-400 block text-[10px] uppercase">Environmental Rating</span>
                <span className="text-white font-semibold">{waterproof}</span>
              </div>

              <div className="p-3 rounded-xl bg-slate-950 border border-slate-800/80">
                <span className="text-slate-400 block text-[10px] uppercase">Audio System</span>
                <span className="text-white font-semibold">{audio}</span>
              </div>
            </div>
          </div>

          {/* AI Features */}
          <div className="space-y-2">
            <h4 className="text-xs font-bold uppercase tracking-wider text-slate-400">
              On-Board Silicon Neural Analytics
            </h4>
            <div className="flex flex-wrap gap-2">
              {aiList.map((feat: string, idx: number) => (
                <span 
                  key={idx}
                  className="px-3 py-1 rounded-lg bg-slate-800 text-slate-200 text-xs flex items-center gap-1.5"
                >
                  <CheckCircle2 className="w-3.5 h-3.5 text-blue-400" />
                  {feat}
                </span>
              ))}
            </div>
          </div>

        </div>

        {/* Modal Footer Actions */}
        <div className="p-5 sm:p-6 border-t border-slate-800 bg-slate-950/80 flex flex-wrap items-center justify-between gap-4">
          <button
            onClick={handleDownloadDatasheet}
            className="px-4 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-semibold flex items-center gap-2 transition cursor-pointer"
          >
            <Download className="w-4 h-4 text-blue-400" />
            <span>{downloaded ? 'Datasheet Saved!' : 'Download Datasheet'}</span>
          </button>

          <div className="flex items-center gap-3">
            <button
              onClick={onClose}
              className="px-4 py-2.5 rounded-xl text-slate-400 hover:text-white text-xs font-semibold cursor-pointer"
            >
              Close
            </button>
            <button
              onClick={() => {
                onClose();
                onInquire(product);
              }}
              className="px-6 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold uppercase tracking-wider shadow-lg shadow-blue-600/30 flex items-center gap-2 transition cursor-pointer"
            >
              <Mail className="w-4 h-4" />
              <span>Inquire for {model}</span>
            </button>
          </div>
        </div>

      </div>
    </div>
  );
};
