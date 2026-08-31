import AnimatedBackground from "@/components/AnimatedBackground";
import HeroSlide from "@/components/HeroSlide";

export default function Home() {
  return (
   <main className="relative min-h-screen overflow-hidden bg-[#080617]">
  
  {/* Fundo animado */}
  <AnimatedBackground />

  {/* Slide / imagem de fundo */}
  <HeroSlide />

  {/* Conteúdo */}
  <div className="relative z-10 mx-auto flex min-h-screen max-w-7xl items-center justify-between px-6 py-12">

    {/* Lado esquerdo */}
    <div className="max-w-xl">
      <h1 className="text-4xl font-bold text-white md:text-6xl">
        Recarregue seus
      </h1>

      <h1 className="text-4xl font-bold text-white md:text-6xl">
        Diamantes
      </h1>

      <h1 className="text-4xl font-bold text-white md:text-6xl">
        no{" "}
        <span className="bg-gradient-to-r from-purple-400 via-pink-500 to-orange-400 bg-clip-text text-transparent">
          FREE FIRE
        </span>
      </h1>
    </div>

    {/* Lado direito */}
    <div className="w-full max-w-md">
      <form className="flex flex-col gap-5 rounded-2xl border border-purple-500/20 bg-[#121021]/80 p-8 backdrop-blur-xl">
        
        <h2 className="text-xl font-semibold text-white">
          Faça login com teu ID
        </h2>

        <input
          type="text"
          placeholder="Digite o ID do FREE FIRE"
          className="w-full rounded-xl border border-purple-500/30 bg-[#090711] px-4 py-4 text-white outline-none transition placeholder:text-gray-500 focus:border-purple-500"
        />

        <div className="flex gap-4">
          <button
            type="button"
            className="flex flex-1 items-center justify-center rounded-xl bg-orange-500 py-3 font-bold text-white transition hover:scale-[1.02]"
          >
            Fazer Login
          </button>

          <button
            type="button"
            className="flex flex-1 items-center justify-center rounded-xl bg-white py-3 font-bold text-black transition hover:scale-[1.02]"
          >
            Verificar ID
          </button>
        </div>
      </form>
    </div>

  </div>
</main>
  );
}
