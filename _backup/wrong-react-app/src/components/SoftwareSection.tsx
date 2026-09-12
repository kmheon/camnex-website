import React, { useState } from 'react';
import { 
  Smartphone, 
  Monitor, 
  QrCode, 
  BellRing, 
  PlaySquare, 
  CheckCircle2, 
  Lock
} from 'lucide-react';

export const SoftwareSection: React.FC = () => {
  const [downloadModalPlatform, setDownloadModalPlatform] = useState<string | null>(null);

  const handleDownloadClick = (platform: string) => {
    setDownloadModalPlatform(platform);
    setTimeout(() => setDownloadModalPlatform(null), 4000);
  };

  return (
    <section id="software" className="py-20 bg-slate-900/40 border-b border-slate-900">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* Section Header */}
        <div className="text-center max-w-3xl mx-auto mb-16 space-y-4">
          <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-950/80 text-blue-400 text-xs font-bold uppercase tracking-wider border border-blue-800/60">
            <Smartphone className="w-3.5 h-3.5" />
            <span>Software Ecosystem</span>
          </div>

          <h2 className="text-3xl sm:text-4xl font-extrabold text-white tracking-tight font-heading">
            Camnex View: Zero Subscription Remote Access
          </h2>

          <p className="text-base text-slate-300 leading-relaxed">
            Manage single cameras or 128-channel multisite arrays seamlessly across iOS, Android, and Windows PC. No monthly cloud subscriptions or port-forwarding hassles.
          </p>
        </div>

        {/* Download notification banner if triggered */}
        {downloadModalPlatform && (
          <div className="mb-8 max-w-lg mx-auto p-4 rounded-xl bg-blue-600 text-white text-xs font-medium text-center shadow-xl border border-blue-400 animate-pulse">
            Initiating secure download for <strong>{downloadModalPlatform}</strong>. Camnex View installer package is verified virus-free and signed with SHA-256 certificate.
          </div>
        )}

        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
          
          {/* Left Column: Software Features */}
          <div className="lg:col-span-7 space-y-6">
            <div className="grid grid-cols-1 sm:grid-cols-2 gap-5">
              
              <div className="p-5 rounded-2xl bg-slate-900/80 border border-slate-800 space-y-2.5">
                <div className="w-9 h-9 rounded-xl bg-blue-600/20 text-blue-400 flex items-center justify-center">
                  <QrCode className="w-5 h-5" />
                </div>
                <h4 className="text-sm font-bold text-white font-heading">P2P Cloud QR Scan Setup</h4>
                <p className="text-xs text-slate-300 leading-relaxed">
                  Scan the encrypted QR code on your Titan NVR screen using your smartphone to instantly pair in under 10 seconds.
                </p>
              </div>

              <div className="p-5 rounded-2xl bg-slate-900/80 border border-slate-800 space-y-2.5">
                <div className="w-9 h-9 rounded-xl bg-emerald-600/20 text-emerald-400 flex items-center justify-center">
                  <BellRing className="w-5 h-5" />
                </div>
                <h4 className="text-sm font-bold text-white font-heading">Sub-Second AI Push Alerts</h4>
                <p className="text-xs text-slate-300 leading-relaxed">
                  Receive actionable smartphone notifications when a human or vehicle crosses your virtual tripwire, complete with snapshot preview.
                </p>
              </div>

              <div className="p-5 rounded-2xl bg-slate-900/80 border border-slate-800 space-y-2.5">
                <div className="w-9 h-9 rounded-xl bg-purple-600/20 text-purple-400 flex items-center justify-center">
                  <PlaySquare className="w-5 h-5" />
                </div>
                <h4 className="text-sm font-bold text-white font-heading">Multi-Channel Synchronous Playback</h4>
                <p className="text-xs text-slate-300 leading-relaxed">
                  Review up to 16 cameras simultaneously with timeline color-coding for motion, smart vehicle events, and continuous video.
                </p>
              </div>

              <div className="p-5 rounded-2xl bg-slate-900/80 border border-slate-800 space-y-2.5">
                <div className="w-9 h-9 rounded-xl bg-amber-600/20 text-amber-400 flex items-center justify-center">
                  <Lock className="w-5 h-5" />
                </div>
                <h4 className="text-sm font-bold text-white font-heading">Role-Based Multi-User Accounts</h4>
                <p className="text-xs text-slate-300 leading-relaxed">
                  Issue restricted view-only or PTZ-control accounts to shift managers, employees, or family members with 1-click revocation.
                </p>
              </div>

            </div>

            {/* Official Platform Download Buttons */}
            <div className="pt-4 border-t border-slate-800/80">
              <span className="text-xs font-bold text-slate-300 uppercase tracking-wider block mb-3">
                Download Official Applications:
              </span>
              
              <div className="flex flex-wrap items-center gap-3">
                <button
                  onClick={() => handleDownloadClick('Camnex View for iOS (App Store)')}
                  className="px-5 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 border border-slate-800 text-white text-xs font-semibold flex items-center gap-2.5 transition cursor-pointer"
                >
                  <Smartphone className="w-4 h-4 text-blue-400" />
                  <div className="text-left">
                    <span className="text-[10px] text-slate-400 block leading-tight">Download on</span>
                    <span className="font-bold">Apple iOS App Store</span>
                  </div>
                </button>

                <button
                  onClick={() => handleDownloadClick('Camnex View for Android (Google Play)')}
                  className="px-5 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 border border-slate-800 text-white text-xs font-semibold flex items-center gap-2.5 transition cursor-pointer"
                >
                  <Smartphone className="w-4 h-4 text-emerald-400" />
                  <div className="text-left">
                    <span className="text-[10px] text-slate-400 block leading-tight">Get it on</span>
                    <span className="font-bold">Google Play Store</span>
                  </div>
                </button>

                <button
                  onClick={() => handleDownloadClick('Camnex VMS Station for Windows 10/11')}
                  className="px-5 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 border border-slate-800 text-white text-xs font-semibold flex items-center gap-2.5 transition cursor-pointer"
                >
                  <Monitor className="w-4 h-4 text-cyan-400" />
                  <div className="text-left">
                    <span className="text-[10px] text-slate-400 block leading-tight">Desktop VMS Client</span>
                    <span className="font-bold">Windows 10 / 11 64-Bit</span>
                  </div>
                </button>
              </div>
            </div>

          </div>

          {/* Right Column: Visual Mockup */}
          <div className="lg:col-span-5">
            <div className="relative rounded-2xl bg-slate-950 border border-slate-800 p-6 shadow-2xl space-y-4">
              <div className="flex items-center justify-between pb-3 border-b border-slate-800/80">
                <div className="flex items-center gap-2">
                  <div className="w-3 h-3 rounded-full bg-blue-500"></div>
                  <span className="text-xs font-bold text-white font-mono">CAMNEX VIEW V3.8.4</span>
                </div>
                <span className="text-[10px] text-emerald-400 font-semibold flex items-center gap-1">
                  <CheckCircle2 className="w-3 h-3" /> Encrypted P2P Connected
                </span>
              </div>

              {/* Simulated 4-grid mobile view */}
              <div className="grid grid-cols-2 gap-2 aspect-[4/3] rounded-xl overflow-hidden bg-slate-900 p-1.5 border border-slate-800">
                <div className="relative rounded overflow-hidden bg-slate-950 border border-slate-800">
                  <img
                    src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?auto=format&fit=crop&w=400&q=80"
                    alt="Channel 1"
                    className="w-full h-full object-cover"
                  />
                  <span className="absolute bottom-1 left-1 font-mono text-[9px] bg-black/70 px-1 text-white rounded">CH1 • Driveway</span>
                </div>
                <div className="relative rounded overflow-hidden bg-slate-950 border border-slate-800">
                  <img
                    src="https://images.unsplash.com/photo-1549465220-1a8b9238cd48?auto=format&fit=crop&w=400&q=80"
                    alt="Channel 2"
                    className="w-full h-full object-cover"
                  />
                  <span className="absolute bottom-1 left-1 font-mono text-[9px] bg-black/70 px-1 text-white rounded">CH2 • Warehouse</span>
                </div>
                <div className="relative rounded overflow-hidden bg-slate-950 border border-slate-800">
                  <img
                    src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=400&q=80"
                    alt="Channel 3"
                    className="w-full h-full object-cover"
                  />
                  <span className="absolute bottom-1 left-1 font-mono text-[9px] bg-black/70 px-1 text-white rounded">CH3 • PTZ 360</span>
                </div>
                <div className="relative rounded overflow-hidden bg-slate-950 border border-slate-800">
                  <img
                    src="https://images.unsplash.com/photo-1508873696983-2df5293cb395?auto=format&fit=crop&w=400&q=80"
                    alt="Channel 4"
                    className="w-full h-full object-cover"
                  />
                  <span className="absolute bottom-1 left-1 font-mono text-[9px] bg-black/70 px-1 text-white rounded">CH4 • Solar Gate</span>
                </div>
              </div>

              {/* Status details */}
              <div className="space-y-2 text-[11px] text-slate-400">
                <div className="flex items-center justify-between">
                  <span>Connection Security:</span>
                  <span className="text-white font-mono">TLS 1.3 + AES-256</span>
                </div>
                <div className="flex items-center justify-between">
                  <span>Bandwidth Consumption:</span>
                  <span className="text-emerald-400 font-mono">H.265+ Smart Codec</span>
                </div>
                <div className="flex items-center justify-between">
                  <span>Cloud Subscription:</span>
                  <span className="text-blue-400 font-semibold">$0.00 / Month (Lifetime Free)</span>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section>
  );
};
