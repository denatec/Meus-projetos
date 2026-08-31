"use client";

import AnimatedBackground from "@/components/AnimatedBackground";

export default function Hero() {
  return (
    <section className="relative min-h-[370px] overflow-hidden bg-[#080617]">
      
      <AnimatedBackground />

      {/* Conteúdo */}
      <div className="relative z-10 flex min-h-[370px] flex-col items-center justify-center px-6 text-center">
        
        <div className="mb-6 inline-flex items-center gap-2 rounded-full border border-purple-500/40 bg-purple-500/10 px-6 py-3 text-sm font-medium text-purple-300">
          💎
          <span>Recarga de Diamantes</span>
        </div>

        <h1 className="text-5xl font-black tracking-tight text-[#e9e7f2] md:text-7xl">
          Escolha sua{" "}
          <span className="bg-gradient-to-r from-purple-400 via-pink-400 to-orange-400 bg-clip-text text-transparent">
            Recarga
          </span>
        </h1>

        <p className="mt-5 max-w-2xl text-lg font-medium text-gray-400 md:text-2xl">
          Diamantes entregues na hora, com os melhores preços em Kwanzas!
        </p>
      </div>
    </section>
  );
}