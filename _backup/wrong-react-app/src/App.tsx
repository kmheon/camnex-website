import { useState } from 'react';
import { Header } from './components/Header';
import { Hero } from './components/Hero';
import { AboutSection } from './components/AboutSection';
import { ProductCatalog } from './components/ProductCatalog';
import { PackageSection } from './components/PackageSection';
import { IndustriesSection } from './components/IndustriesSection';
import { SoftwareSection } from './components/SoftwareSection';
import { WhyCamnex } from './components/WhyCamnex';
import { ContactSection } from './components/ContactSection';
import { FaqSection } from './components/FaqSection';
import { Footer } from './components/Footer';
import { ProductDetailModal } from './components/ProductDetailModal';
import { InquiryModal } from './components/InquiryModal';
import { PRODUCTS, PACKAGES } from './data/mockData';
import { Product, SecurityPackage } from './types';

export function App() {
  const [selectedProduct, setSelectedProduct] = useState<Product | null>(null);
  const [isInquiryModalOpen, setIsInquiryModalOpen] = useState<boolean>(false);
  const [inquirySubject, setInquirySubject] = useState<string>('General Commercial Inquiry');
  const [toastMessage] = useState<string | null>(null);

  const handleNavigate = (sectionId: string) => {
    const el = document.getElementById(sectionId);
    if (el) {
      el.scrollIntoView({ behavior: 'smooth' });
    }
  };

  const handleOpenInquiry = (subject: string = 'General Commercial Inquiry') => {
    setInquirySubject(subject);
    setIsInquiryModalOpen(true);
  };

  const handleSelectProduct = (product: Product) => {
    setSelectedProduct(product);
  };

  const handleInquireProduct = (product: Product) => {
    const identifier = product.modelCode || product.model;
    handleOpenInquiry(`Inquiry for ${product.name} (${identifier})`);
  };

  const handleInquirePackage = (pkg: SecurityPackage) => {
    handleOpenInquiry(`Inquiry for Turnkey Package: ${pkg.title} ($${pkg.price})`);
  };

  const handleSelectIndustry = (industryName: string) => {
    handleOpenInquiry(`Surveillance Solution for ${industryName}`);
  };

  return (
    <div className="min-h-screen bg-slate-950 text-slate-100 flex flex-col font-sans selection:bg-blue-600 selection:text-white">
      {/* Toast Notification */}
      {toastMessage && (
        <div className="fixed top-24 right-6 z-50 bg-blue-600 text-white font-medium text-xs px-5 py-3 rounded-xl shadow-2xl border border-blue-400/40 animate-bounce">
          {toastMessage}
        </div>
      )}

      {/* Official Corporate Website Header */}
      <Header
        onNavigate={handleNavigate}
        onOpenInquiry={handleOpenInquiry}
      />

      {/* Main Website Flow */}
      <main className="flex-1">
        {/* 1. Hero Section */}
        <Hero
          onExploreProducts={() => handleNavigate('products')}
          onExplorePackages={() => handleNavigate('packages')}
          onOpenInquiry={handleOpenInquiry}
        />

        {/* 2. About Camnex Corporate Section */}
        <AboutSection />

        {/* 3. Hardware Product Catalog & Datasheets */}
        <ProductCatalog
          products={PRODUCTS}
          onSelectProduct={handleSelectProduct}
          onInquireProduct={handleInquireProduct}
        />

        {/* 4. Turnkey Security Packages & Bundles */}
        <PackageSection
          packages={PACKAGES}
          onInquirePackage={handleInquirePackage}
          onOpenInquiry={handleOpenInquiry}
        />

        {/* 5. Sector-Specific Industry Solutions */}
        <IndustriesSection
          onSelectIndustry={handleSelectIndustry}
        />

        {/* 6. Official Camnex View Mobile & VMS Software Center */}
        <SoftwareSection />

        {/* 7. Engineering & Architectural Advantages */}
        <WhyCamnex />

        {/* 8. Frequently Asked Questions */}
        <FaqSection />

        {/* 9. Contact Us & Regional Offices */}
        <ContactSection
          defaultSubject={inquirySubject}
        />
      </main>

      {/* Corporate Footer */}
      <Footer
        onNavigate={handleNavigate}
        onOpenInquiry={handleOpenInquiry}
      />

      {/* Product Datasheet Modal */}
      <ProductDetailModal
        product={selectedProduct}
        onClose={() => setSelectedProduct(null)}
        onInquire={handleInquireProduct}
      />

      {/* Official Inquiry / Quote Modal */}
      <InquiryModal
        isOpen={isInquiryModalOpen}
        onClose={() => setIsInquiryModalOpen(false)}
        defaultSubject={inquirySubject}
      />
    </div>
  );
}

export default App;
