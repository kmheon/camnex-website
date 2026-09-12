import React from 'react';
import { 
  ShieldAlert, 
  Cpu, 
  HardDrive, 
  CloudOff, 
  Award,
  Check,
  X
} from 'lucide-react';

export const WhyCamnex: React.FC = () => {
  return (
    <section id="why-camnex" className="py-20 bg-slate-950 border-b border-slate-900">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* Section Header */}
        <div className="text-center max-w-3xl mx-auto mb-16 space-y-4">
          <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-950/80 text-blue-400 text-xs font-bold uppercase tracking-wider border border-blue-800/60">
            <Award className="w-3.5 h-3.5" />
            <span>The Camnex Engineering Difference</span>
          </div>

          <h2 className="text-3xl sm:text-4xl font-extrabold text-white tracking-tight font-heading">
            Built for Property Owners Who Value Data Privacy &amp; Zero Ongoing Cost
          </h2>

          <p className="text-base text-slate-300 leading-relaxed">
            Most modern consumer cameras turn your security into an endless monthly subscription rent trap. Camnex replaces the cloud dependency with ruggedized on-premise AI hardware.
          </p>
        </div>

        {/* 4 Feature Cards */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
          
          <div className="p-6 rounded-2xl bg-slate-900/90 border border-slate-800 space-y-3">
            <div className="w-10 h-10 rounded-xl bg-blue-600/20 text-blue-400 flex items-center justify-center">
              <CloudOff className="w-5 h-5" />
            </div>
            <h3 className="text-base font-bold text-white font-heading">Zero Cloud Rent</h3>
            <p className="text-xs text-slate-300 leading-relaxed">
              Consumer brands charge $10-$30 every single month per camera. With Camnex, you buy the hardware once and own it forever with 0 monthly subscription fees.
            </p>
          </div>

          <div className="p-6 rounded-2xl bg-slate-900/90 border border-slate-800 space-y-3">
            <div className="w-10 h-10 rounded-xl bg-emerald-600/20 text-emerald-400 flex items-center justify-center">
              <Cpu className="w-5 h-5" />
            </div>
            <h3 className="text-base font-bold text-white font-heading">Edge Silicon AI</h3>
            <p className="text-xs text-slate-300 leading-relaxed">
              Detection happens directly on the camera lens using dedicated NPU neural chips. Filters out branches, rain, and headlights with 99.4% true-positive accuracy.
            </p>
          </div>

          <div className="p-6 rounded-2xl bg-slate-900/90 border border-slate-800 space-y-3">
            <div className="w-10 h-10 rounded-xl bg-purple-600/20 text-purple-400 flex items-center justify-center">
              <HardDrive className="w-5 h-5" />
            </div>
            <h3 className="text-base font-bold text-white font-heading">100% Data Sovereignty</h3>
            <p className="text-xs text-slate-300 leading-relaxed">
              Your security footage stays encrypted on your local Titan NVR. No big-tech corporation has access to your private camera streams or faces.
            </p>
          </div>

          <div className="p-6 rounded-2xl bg-slate-900/90 border border-slate-800 space-y-3">
            <div className="w-10 h-10 rounded-xl bg-amber-600/20 text-amber-400 flex items-center justify-center">
              <ShieldAlert className="w-5 h-5" />
            </div>
            <h3 className="text-base font-bold text-white font-heading">Active Defense</h3>
            <p className="text-xs text-slate-300 leading-relaxed">
              Rather than just recording a burglary after the fact, our Falcon and Apex series trigger flashing red/blue strobes and 110dB sirens the moment boundaries are crossed.
            </p>
          </div>

        </div>

        {/* Comparison Matrix Table */}
        <div className="rounded-2xl border border-slate-800 bg-slate-900/60 overflow-hidden shadow-xl">
          <div className="p-6 border-b border-slate-800">
            <h3 className="text-lg font-bold text-white font-heading">
              Architecture Comparison: Camnex Systems vs. Consumer Cloud Cameras
            </h3>
            <p className="text-xs text-slate-400 mt-1">
              Evaluating long-term costs, data privacy, and operational reliability over 3 years.
            </p>
          </div>

          <div className="overflow-x-auto">
            <table className="w-full text-left text-xs">
              <thead className="bg-slate-950/80 text-slate-400 uppercase tracking-wider font-semibold border-b border-slate-800">
                <tr>
                  <th className="p-4 pl-6">Surveillance Criteria</th>
                  <th className="p-4 text-blue-400 font-bold bg-blue-950/20">Camnex Commercial Systems</th>
                  <th className="p-4 text-slate-400">Typical Consumer Cloud Cameras</th>
                </tr>
              </thead>
              <tbody className="divide-y divide-slate-800/60 text-slate-300">
                <tr>
                  <td className="p-4 pl-6 font-semibold text-white">Monthly Storage Fees</td>
                  <td className="p-4 font-bold text-emerald-400 bg-blue-950/10 flex items-center gap-1.5">
                    <Check className="w-4 h-4 text-emerald-400" />
                    $0 Forever (Local Surveillance HDD)
                  </td>
                  <td className="p-4 text-rose-400">
                    <span className="flex items-center gap-1.5">
                      <X className="w-4 h-4" />
                      $120 - $360 per camera per year
                    </span>
                  </td>
                </tr>

                <tr>
                  <td className="p-4 pl-6 font-semibold text-white">Works When Internet Fails</td>
                  <td className="p-4 font-bold text-emerald-400 bg-blue-950/10 flex items-center gap-1.5">
                    <Check className="w-4 h-4 text-emerald-400" />
                    100% Uninterrupted 24/7 Recording
                  </td>
                  <td className="p-4 text-rose-400">
                    <span className="flex items-center gap-1.5">
                      <X className="w-4 h-4" />
                      Stops recording or drops offline
                    </span>
                  </td>
                </tr>

                <tr>
                  <td className="p-4 pl-6 font-semibold text-white">Resolution &amp; Bitrate</td>
                  <td className="p-4 font-bold text-emerald-400 bg-blue-950/10 flex items-center gap-1.5">
                    <Check className="w-4 h-4 text-emerald-400" />
                    True 4K UHD (3840×2160) uncompressed
                  </td>
                  <td className="p-4 text-slate-400">
                    Compressed 1080p to save cloud bandwidth
                  </td>
                </tr>

                <tr>
                  <td className="p-4 pl-6 font-semibold text-white">Video Privacy &amp; Access</td>
                  <td className="p-4 font-bold text-emerald-400 bg-blue-950/10 flex items-center gap-1.5">
                    <Check className="w-4 h-4 text-emerald-400" />
                    Encrypted on-premise hardware storage
                  </td>
                  <td className="p-4 text-rose-400">
                    <span className="flex items-center gap-1.5">
                      <X className="w-4 h-4" />
                      Stored on third-party public cloud servers
                    </span>
                  </td>
                </tr>

                <tr>
                  <td className="p-4 pl-6 font-semibold text-white">Hardware Durability</td>
                  <td className="p-4 font-bold text-emerald-400 bg-blue-950/10 flex items-center gap-1.5">
                    <Check className="w-4 h-4 text-emerald-400" />
                    Heavy cast aluminum alloy (IP67 / IK10)
                  </td>
                  <td className="p-4 text-slate-400">
                    Lightweight plastic consumer housings
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </section>
  );
};
