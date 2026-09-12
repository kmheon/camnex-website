import React, { useState } from 'react';
import { 
  ShieldCheck, 
  Menu, 
  X, 
  PhoneCall, 
  Download, 
  Building2, 
  Camera, 
  Layers, 
  Mail,
  ChevronRight
} from 'lucide-react';

interface HeaderProps {
  onNavigate: (sectionId: string) => void;
  onOpenInquiry: (subject?: string) => void;
}

export const Header: React.FC<HeaderProps> = ({
  onNavigate,
  onOpenInquiry
}) => {
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

  const handleNavClick = (sectionId: string) => {
    setMobileMenuOpen(false);
    onNavigate(sectionId);
  };

  return (
    <header id="site-header" className="sticky top-0 z-40 w-full border-b border-slate-800 bg-slate-950/95 backdrop-blur-md">
      {/* Top Corporate Bar */}
      <div className="hidden sm:flex items-center justify-between px-4 lg:px-8 py-2 bg-slate-900/90 border-b border-slate-800/80 text-xs text-slate-300">
        <div className="flex items-center gap-4">
          <span className="flex items-center gap-1.5 text-blue-400 font-semibold">
            <ShieldCheck className="w-4 h-4 text-blue-400" />
            Camnex Innovations — Complete Security &amp; CCTV Solutions
          </span>
          <span className="text-slate-600">|</span>
          <span className="text-slate-400">ISO 9001:2015 &amp; ONVIF Certified Manufacturer</span>
        </div>
        <div className="flex items-center gap-5">
          <a href="tel:18005552266" className="flex items-center gap-1.5 text-slate-300 hover:text-blue-400 transition-colors">
            <PhoneCall className="w-3.5 h-3.5 text-blue-400" />
            <span className="font-semibold">+1 (800) 555-CAMNEX</span>
          </a>
          <span className="text-slate-600">|</span>
          <a href="mailto:info@camnex.in" className="flex items-center gap-1.5 text-slate-300 hover:text-blue-400 transition-colors">
            <Mail className="w-3.5 h-3.5 text-blue-400" />
            <span>info@camnex.in</span>
          </a>
        </div>
      </div>

      {/* Main Corporate Navbar */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        {/* Brand Logo */}
        <div 
          onClick={() => handleNavClick('hero')} 
          className="flex items-center gap-3 cursor-pointer group"
          id="corporate-logo"
        >
          <div className="w-11 h-11 rounded-xl bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center shadow-lg shadow-blue-900/30 border border-blue-500/30 group-hover:scale-105 transition-transform">
            <Camera className="w-6 h-6 text-white" />
          </div>
          <div className="flex flex-col">
            <div className="flex items-center gap-1.5">
              <span className="text-2xl font-black tracking-tight text-white font-heading">
                CAM<span className="text-blue-500">NEX</span>
              </span>
            </div>
            <span className="text-[10px] tracking-widest text-slate-400 uppercase font-semibold">
              Security Solutions
            </span>
          </div>
        </div>

        {/* Website Navigation Links */}
        <nav className="hidden lg:flex items-center gap-7 text-sm font-medium text-slate-300">
          <button 
            onClick={() => handleNavClick('about')} 
            className="hover:text-blue-400 transition-colors cursor-pointer"
            id="nav-about"
          >
            About Us
          </button>
          <button 
            onClick={() => handleNavClick('products')} 
            className="hover:text-blue-400 transition-colors cursor-pointer"
            id="nav-products"
          >
            Products
          </button>
          <button 
            onClick={() => handleNavClick('packages')} 
            className="hover:text-blue-400 transition-colors cursor-pointer"
            id="nav-packages"
          >
            Turnkey Packages
          </button>
          <button 
            onClick={() => handleNavClick('industries')} 
            className="hover:text-blue-400 transition-colors cursor-pointer"
            id="nav-industries"
          >
            Industries
          </button>
          <button 
            onClick={() => handleNavClick('software')} 
            className="text-blue-400 hover:text-blue-300 transition-colors flex items-center gap-1 cursor-pointer font-semibold"
            id="nav-software"
          >
            <Download className="w-3.5 h-3.5 text-blue-400" />
            Camnex View App
          </button>
          <button 
            onClick={() => handleNavClick('contact')} 
            className="hover:text-blue-400 transition-colors cursor-pointer"
            id="nav-contact"
          >
            Contact
          </button>
        </nav>

        {/* Right Action: Inquire & Get Quote */}
        <div className="flex items-center gap-3">
          <button
            onClick={() => onOpenInquiry('General Commercial Inquiry')}
            id="btn-header-inquire"
            className="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-blue-600 hover:bg-blue-500 text-white text-xs font-bold uppercase tracking-wider transition shadow-md shadow-blue-600/30 cursor-pointer"
          >
            <span>Inquire Now</span>
            <ChevronRight className="w-3.5 h-3.5" />
          </button>

          {/* Mobile hamburger menu toggle */}
          <button
            onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
            id="btn-mobile-menu"
            aria-label="Toggle Navigation Menu"
            className="lg:hidden p-2 rounded-lg text-slate-300 hover:text-white hover:bg-slate-800"
          >
            {mobileMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
          </button>
        </div>
      </div>

      {/* Mobile Drawer Menu */}
      {mobileMenuOpen && (
        <div className="lg:hidden border-t border-slate-800 bg-slate-950 px-6 py-6 space-y-4 shadow-2xl">
          <div className="flex flex-col space-y-3 text-sm font-medium">
            <button
              onClick={() => handleNavClick('about')}
              className="flex items-center gap-3 text-left py-2.5 text-slate-200 hover:text-blue-400 border-b border-slate-900"
            >
              <Building2 className="w-4 h-4 text-blue-400" />
              <span>About Camnex</span>
            </button>
            <button
              onClick={() => handleNavClick('products')}
              className="flex items-center gap-3 text-left py-2.5 text-slate-200 hover:text-blue-400 border-b border-slate-900"
            >
              <Camera className="w-4 h-4 text-blue-400" />
              <span>Surveillance Hardware &amp; Products</span>
            </button>
            <button
              onClick={() => handleNavClick('packages')}
              className="flex items-center gap-3 text-left py-2.5 text-slate-200 hover:text-blue-400 border-b border-slate-900"
            >
              <Layers className="w-4 h-4 text-blue-400" />
              <span>Turnkey Security Packages</span>
            </button>
            <button
              onClick={() => handleNavClick('industries')}
              className="flex items-center gap-3 text-left py-2.5 text-slate-200 hover:text-blue-400 border-b border-slate-900"
            >
              <Building2 className="w-4 h-4 text-blue-400" />
              <span>Industries &amp; Applications</span>
            </button>
            <button
              onClick={() => handleNavClick('software')}
              className="flex items-center gap-3 text-left py-2.5 text-blue-400 font-semibold border-b border-slate-900"
            >
              <Download className="w-4 h-4 text-blue-400" />
              <span>Camnex View Software &amp; Apps</span>
            </button>
            <button
              onClick={() => handleNavClick('contact')}
              className="flex items-center gap-3 text-left py-2.5 text-slate-200 hover:text-blue-400 border-b border-slate-900"
            >
              <Mail className="w-4 h-4 text-blue-400" />
              <span>Contact Us &amp; Branch Offices</span>
            </button>
          </div>

          <div className="pt-2">
            <button
              onClick={() => {
                setMobileMenuOpen(false);
                onOpenInquiry();
              }}
              className="w-full py-3 rounded-lg bg-blue-600 text-white font-bold text-xs uppercase tracking-wider shadow-lg shadow-blue-600/30"
            >
              Request Commercial Quote
            </button>
          </div>
        </div>
      )}
    </header>
  );
};
