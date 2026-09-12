import React from 'react';
import { Camera, PhoneCall, Mail, MapPin, CheckCircle2, Download } from 'lucide-react';

interface FooterProps {
  onNavigate: (sectionId: string) => void;
  onOpenInquiry: (subject?: string) => void;
}

export const Footer: React.FC<FooterProps> = ({ onNavigate, onOpenInquiry }) => {
  return (
    <footer id="site-footer" className="bg-slate-950 border-t border-slate-900 text-slate-400 text-xs">
      
      {/* Compliance & Standards Bar */}
      <div className="border-b border-slate-900 bg-slate-900/50 py-5">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap items-center justify-between gap-4">
          <span className="text-slate-300 font-bold uppercase tracking-wider text-[11px]">
            Certified Manufacturing &amp; Global Compliance:
          </span>
          <div className="flex flex-wrap items-center gap-6 text-slate-400 text-xs">
            <span className="flex items-center gap-1.5 font-medium text-slate-300">
              <CheckCircle2 className="w-4 h-4 text-blue-400" />
              ISO 9001:2015 Quality Management
            </span>
            <span className="flex items-center gap-1.5 font-medium text-slate-300">
              <CheckCircle2 className="w-4 h-4 text-blue-400" />
              NDAA Section 889 Compliant
            </span>
            <span className="flex items-center gap-1.5 font-medium text-slate-300">
              <CheckCircle2 className="w-4 h-4 text-blue-400" />
              ONVIF Profile S / G / T
            </span>
            <span className="flex items-center gap-1.5 font-medium text-slate-300">
              <CheckCircle2 className="w-4 h-4 text-blue-400" />
              FCC &amp; CE Certified
            </span>
          </div>
        </div>
      </div>

      {/* Main Website Sitemap */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
          
          {/* Company Identity */}
          <div className="lg:col-span-2 space-y-4">
            <div className="flex items-center gap-3">
              <div className="w-9 h-9 rounded-xl bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center shadow border border-blue-500/30">
                <Camera className="w-5 h-5 text-white" />
              </div>
              <div className="flex flex-col">
                <span className="text-xl font-black tracking-tight text-white font-heading">
                  CAM<span className="text-blue-500">NEX</span>
                </span>
                <span className="text-[9px] uppercase tracking-widest text-slate-400 font-semibold">
                  Security Innovations
                </span>
              </div>
            </div>

            <p className="text-slate-400 text-xs leading-relaxed max-w-sm">
              Camnex designs and manufactures enterprise-grade CCTV surveillance equipment, 4K AI cameras, Titan NVR recording hubs, and off-grid solar cameras with zero recurring cloud subscription fees.
            </p>

            <div className="space-y-2 pt-2 text-slate-400">
              <div className="flex items-center gap-2">
                <PhoneCall className="w-3.5 h-3.5 text-blue-400 shrink-0" />
                <span>+1 (800) 555-CAMNEX (Toll Free) / +91 (80) 4123-4567</span>
              </div>
              <div className="flex items-center gap-2">
                <Mail className="w-3.5 h-3.5 text-blue-400 shrink-0" />
                <span>info@camnex.in / solutions@camnex.in</span>
              </div>
              <div className="flex items-center gap-2">
                <MapPin className="w-3.5 h-3.5 text-blue-400 shrink-0" />
                <span>Camnex Technology Labs, Bengaluru &amp; Wilmington</span>
              </div>
            </div>
          </div>

          {/* Product Categories */}
          <div className="space-y-3">
            <h4 className="text-white font-bold uppercase tracking-wider text-[11px] font-heading">
              CCTV Hardware
            </h4>
            <ul className="space-y-2">
              <li>
                <button onClick={() => onNavigate('products')} className="hover:text-blue-400 transition cursor-pointer">
                  4K AI Dome Cameras
                </button>
              </li>
              <li>
                <button onClick={() => onNavigate('products')} className="hover:text-blue-400 transition cursor-pointer">
                  Perimeter Bullet Cameras
                </button>
              </li>
              <li>
                <button onClick={() => onNavigate('products')} className="hover:text-blue-400 transition cursor-pointer">
                  360° PTZ Speed Domes
                </button>
              </li>
              <li>
                <button onClick={() => onNavigate('products')} className="hover:text-blue-400 transition cursor-pointer">
                  Nomad 4G Solar Cameras
                </button>
              </li>
              <li>
                <button onClick={() => onNavigate('products')} className="hover:text-blue-400 transition cursor-pointer">
                  Titan 4K AI NVR Systems
                </button>
              </li>
            </ul>
          </div>

          {/* Solutions & Packages */}
          <div className="space-y-3">
            <h4 className="text-white font-bold uppercase tracking-wider text-[11px] font-heading">
              Turnkey Solutions
            </h4>
            <ul className="space-y-2">
              <li>
                <button onClick={() => onNavigate('packages')} className="hover:text-blue-400 transition cursor-pointer">
                  Home Shield 4K Kit
                </button>
              </li>
              <li>
                <button onClick={() => onNavigate('packages')} className="hover:text-blue-400 transition cursor-pointer">
                  Business Guard Pro 4-Cam
                </button>
              </li>
              <li>
                <button onClick={() => onNavigate('packages')} className="hover:text-blue-400 transition cursor-pointer">
                  Enterprise Fortress 8-Cam
                </button>
              </li>
              <li>
                <button onClick={() => onNavigate('industries')} className="hover:text-blue-400 transition cursor-pointer">
                  Warehouse &amp; Logistics
                </button>
              </li>
              <li>
                <button onClick={() => onNavigate('industries')} className="hover:text-blue-400 transition cursor-pointer">
                  Banking &amp; ATM Security
                </button>
              </li>
            </ul>
          </div>

          {/* Software & Support */}
          <div className="space-y-3">
            <h4 className="text-white font-bold uppercase tracking-wider text-[11px] font-heading">
              Software &amp; Support
            </h4>
            <ul className="space-y-2">
              <li>
                <button onClick={() => onNavigate('software')} className="text-blue-400 hover:text-blue-300 transition flex items-center gap-1 cursor-pointer">
                  <Download className="w-3.5 h-3.5" />
                  <span>Camnex View App (iOS/Android)</span>
                </button>
              </li>
              <li>
                <button onClick={() => onNavigate('software')} className="hover:text-blue-400 transition cursor-pointer">
                  Windows PC VMS Client
                </button>
              </li>
              <li>
                <button onClick={() => onNavigate('about')} className="hover:text-blue-400 transition cursor-pointer">
                  About Camnex Innovations
                </button>
              </li>
              <li>
                <button onClick={() => onNavigate('why-camnex')} className="hover:text-blue-400 transition cursor-pointer">
                  3-Year Hardware Warranty
                </button>
              </li>
              <li>
                <button onClick={() => onOpenInquiry('Authorized Dealer Inquiry')} className="hover:text-blue-400 transition cursor-pointer">
                  Become an Authorized Dealer
                </button>
              </li>
            </ul>
          </div>

        </div>

        {/* Bottom Legal Copyright */}
        <div className="mt-14 pt-8 border-t border-slate-900 flex flex-col sm:flex-row items-center justify-between gap-4 text-slate-400 text-[11px]">
          <p>© {new Date().getFullYear()} Camnex Innovations. All rights reserved. Official Corporate Website.</p>
          <div className="flex items-center gap-6">
            <span className="hover:text-slate-300 transition cursor-pointer">Privacy Policy</span>
            <span className="hover:text-slate-300 transition cursor-pointer">Hardware Warranty Terms</span>
            <span className="hover:text-slate-300 transition cursor-pointer">Regulatory Conformity</span>
            <span className="hover:text-slate-300 transition cursor-pointer">Sitemap</span>
          </div>
        </div>

      </div>
    </footer>
  );
};
