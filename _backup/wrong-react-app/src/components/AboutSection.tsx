import React from 'react';
import { 
  Building2, 
  ShieldCheck, 
  Award, 
  Users, 
  CheckCircle2, 
  Cpu
} from 'lucide-react';

export const AboutSection: React.FC = () => {
  return (
    <section id="about" className="py-20 bg-slate-900/60 border-b border-slate-900">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* Section Header */}
        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
          
          <div className="lg:col-span-6 space-y-6">
            <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-950/80 border border-blue-800/60 text-blue-400 text-xs font-bold uppercase tracking-wider">
              <Building2 className="w-3.5 h-3.5" />
              <span>About Camnex Innovations</span>
            </div>

            <h2 className="text-3xl sm:text-4xl font-extrabold text-white tracking-tight font-heading leading-tight">
              Leading the Standard in Intelligent CCTV &amp; Security Engineering
            </h2>

            <p className="text-slate-300 text-sm sm:text-base leading-relaxed">
              Camnex is an innovative manufacturer and provider of total security solutions. We specialize in high-definition 4K AI optical cameras, network video recorders (NVRs), off-grid solar surveillance systems, and multi-channel remote monitoring software.
            </p>

            <p className="text-slate-300 text-sm leading-relaxed">
              Founded on the principle that property security should remain reliable, private, and subscription-free, Camnex hardware is deployed across residential townships, banking institutions, manufacturing facilities, government infrastructure, and retail enterprises worldwide.
            </p>

            <div className="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2 text-xs text-slate-300">
              <div className="flex items-center gap-2.5">
                <CheckCircle2 className="w-4 h-4 text-emerald-400 shrink-0" />
                <span>ISO 9001:2015 Quality Certified</span>
              </div>
              <div className="flex items-center gap-2.5">
                <CheckCircle2 className="w-4 h-4 text-emerald-400 shrink-0" />
                <span>NDAA Section 889 Compliant</span>
              </div>
              <div className="flex items-center gap-2.5">
                <CheckCircle2 className="w-4 h-4 text-emerald-400 shrink-0" />
                <span>Global ONVIF Conformant Hardware</span>
              </div>
              <div className="flex items-center gap-2.5">
                <CheckCircle2 className="w-4 h-4 text-emerald-400 shrink-0" />
                <span>Dedicated Technical Support Center</span>
              </div>
            </div>
          </div>

          {/* Right Column: Key Company Milestones / Stats */}
          <div className="lg:col-span-6">
            <div className="grid grid-cols-2 gap-4">
              
              <div className="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-2 shadow-lg">
                <div className="w-10 h-10 rounded-xl bg-blue-600/15 border border-blue-500/30 flex items-center justify-center text-blue-400">
                  <ShieldCheck className="w-5 h-5" />
                </div>
                <div className="text-3xl font-black text-white font-heading">10,000+</div>
                <div className="text-xs font-semibold text-slate-200">Surveillance Deployments</div>
                <p className="text-[11px] text-slate-400">
                  Protecting residential estates, warehouses, and commercial offices.
                </p>
              </div>

              <div className="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-2 shadow-lg">
                <div className="w-10 h-10 rounded-xl bg-emerald-600/15 border border-emerald-500/30 flex items-center justify-center text-emerald-400">
                  <Users className="w-5 h-5" />
                </div>
                <div className="text-3xl font-black text-white font-heading">500+</div>
                <div className="text-xs font-semibold text-slate-200">Integrator &amp; Channel Partners</div>
                <p className="text-[11px] text-slate-400">
                  Certified security installers, distributors, and technicians.
                </p>
              </div>

              <div className="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-2 shadow-lg">
                <div className="w-10 h-10 rounded-xl bg-cyan-600/15 border border-cyan-500/30 flex items-center justify-center text-cyan-400">
                  <Cpu className="w-5 h-5" />
                </div>
                <div className="text-3xl font-black text-white font-heading">100%</div>
                <div className="text-xs font-semibold text-slate-200">Edge AI Processing</div>
                <p className="text-[11px] text-slate-400">
                  Real-time neural human and vehicle detection directly on camera.
                </p>
              </div>

              <div className="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-2 shadow-lg">
                <div className="w-10 h-10 rounded-xl bg-amber-600/15 border border-amber-500/30 flex items-center justify-center text-amber-400">
                  <Award className="w-5 h-5" />
                </div>
                <div className="text-3xl font-black text-white font-heading">2-5 Yrs</div>
                <div className="text-xs font-semibold text-slate-200">Hardware Warranty</div>
                <p className="text-[11px] text-slate-400">
                  Advance hardware replacement guarantee and lifetime support.
                </p>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section>
  );
};
