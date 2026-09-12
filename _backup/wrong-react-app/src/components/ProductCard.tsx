import React from 'react';
import { Product } from '../types';
import { 
  Eye, 
  Cpu, 
  Star, 
  FileText,
  Mail,
  ChevronRight
} from 'lucide-react';

interface ProductCardProps {
  product: Product;
  onSelectProduct: (product: Product) => void;
  onInquireProduct: (product: Product) => void;
}

export const ProductCard: React.FC<ProductCardProps> = ({
  product,
  onSelectProduct,
  onInquireProduct
}) => {
  const model = product.modelCode || product.model;
  const image = product.imageUrl || product.image;
  const nightVision = product.nightVisionRange || product.nightVision;
  const lens = product.lensFov || product.lens;

  return (
    <div className="group rounded-2xl bg-slate-900/90 border border-slate-800 hover:border-slate-700 transition-all duration-300 flex flex-col justify-between overflow-hidden shadow-xl hover:shadow-2xl hover:shadow-blue-900/10">
      
      {/* Card Image Area */}
      <div className="relative aspect-[16/10] overflow-hidden bg-slate-950">
        <img
          src={image}
          alt={product.name}
          className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90 group-hover:opacity-100"
        />

        {/* Gradient Shadow */}
        <div className="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-black/30 pointer-events-none"></div>

        {/* Category & Badge */}
        <div className="absolute top-3 left-3 flex flex-wrap items-center gap-1.5">
          <span className="font-mono text-[10px] font-bold uppercase tracking-wider bg-slate-900/90 text-blue-400 border border-slate-700 px-2 py-0.5 rounded backdrop-blur-sm">
            {product.category}
          </span>
          {product.badge && (
            <span className="text-[10px] font-bold uppercase tracking-wider bg-blue-600 text-white px-2 py-0.5 rounded shadow">
              {product.badge}
            </span>
          )}
        </div>

        {/* Quick View Button */}
        <button
          onClick={() => onSelectProduct(product)}
          className="absolute bottom-3 right-3 px-3 py-1.5 rounded-lg bg-slate-900/80 hover:bg-slate-900 text-slate-200 text-xs font-semibold backdrop-blur-md border border-slate-700/80 flex items-center gap-1.5 transition opacity-0 group-hover:opacity-100 cursor-pointer"
        >
          <Eye className="w-3.5 h-3.5 text-blue-400" />
          <span>Datasheet</span>
        </button>
      </div>

      {/* Card Information */}
      <div className="p-5 sm:p-6 space-y-4 flex-1 flex flex-col justify-between">
        <div className="space-y-2">
          {/* Model code & Reviews */}
          <div className="flex items-center justify-between text-xs">
            <span className="font-mono text-slate-400 text-[11px] font-semibold">
              {model}
            </span>
            <div className="flex items-center gap-1 text-amber-400 text-xs">
              <Star className="w-3.5 h-3.5 fill-amber-400" />
              <span className="font-bold">{product.rating}</span>
              <span className="text-slate-400 text-[10px]">({product.reviewsCount})</span>
            </div>
          </div>

          <h3 
            onClick={() => onSelectProduct(product)}
            className="text-base font-bold text-white hover:text-blue-400 transition cursor-pointer font-heading leading-snug"
          >
            {product.name}
          </h3>

          <p className="text-xs text-slate-300 line-clamp-2 leading-relaxed">
            {product.tagline}
          </p>
        </div>

        {/* Optical & Technical Highlights */}
        <div className="pt-2 border-t border-slate-800/80 space-y-1.5 text-xs text-slate-300">
          <div className="flex items-center justify-between text-[11px]">
            <span className="text-slate-400">Resolution:</span>
            <span className="font-mono text-white font-medium">{product.resolution}</span>
          </div>
          <div className="flex items-center justify-between text-[11px]">
            <span className="text-slate-400">Night Vision:</span>
            <span className="text-slate-200 truncate max-w-[150px]">{nightVision}</span>
          </div>
          <div className="flex items-center justify-between text-[11px]">
            <span className="text-slate-400">Optical FOV:</span>
            <span className="text-slate-200">{lens}</span>
          </div>
        </div>

        {/* AI Capabilities Tags */}
        <div className="pt-2 flex flex-wrap gap-1.5">
          {product.features.slice(0, 2).map((feat, idx) => (
            <span 
              key={idx} 
              className="text-[10px] font-medium bg-slate-950 text-slate-300 border border-slate-800 px-2 py-0.5 rounded flex items-center gap-1"
            >
              <Cpu className="w-3 h-3 text-blue-400" />
              <span className="truncate max-w-[130px]">{feat}</span>
            </span>
          ))}
        </div>

        {/* Pricing & Corporate Actions */}
        <div className="pt-4 border-t border-slate-800 flex items-center justify-between gap-2">
          <div>
            <span className="text-[10px] text-slate-400 block uppercase">MSRP</span>
            <span className="text-xl font-extrabold text-white font-mono font-heading">
              ${product.price}
            </span>
          </div>

          <div className="flex items-center gap-2">
            <button
              onClick={() => onSelectProduct(product)}
              className="p-2 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white transition cursor-pointer"
              title="View Technical Specs"
            >
              <FileText className="w-4 h-4" />
            </button>
            <button
              onClick={() => onInquireProduct(product)}
              className="px-3.5 py-2 rounded-lg bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold uppercase tracking-wider flex items-center gap-1.5 transition shadow-md shadow-blue-600/30 cursor-pointer"
            >
              <Mail className="w-3.5 h-3.5" />
              <span>Inquire</span>
              <ChevronRight className="w-3 h-3" />
            </button>
          </div>
        </div>

      </div>

    </div>
  );
};
