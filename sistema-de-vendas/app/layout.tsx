import "./globals.css";
import Link from "next/link";

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="pt-BR">
      <body>
        {/* Fundo decorativo */}
        <div className="animated-background">
          <div className="blob blob-1"></div>
          <div className="blob blob-2"></div>
          <div className="blob blob-3"></div>
          <div className="blob blob-4"></div>
          <div className="blob blob-5"></div>
        </div>

        {/* Navbar */}
        <header className="navbar">
          <div className="navbar-container">

            {/* Menu esquerdo */}
            <nav className="menu">
              <Link href="/" className="nav-link active">
                INÍCIO
              </Link>

              <Link href="/recargas" className="nav-link">
                RECARGAS
              </Link>

              <Link href="/marketplace" className="nav-link marketplace">
                MARKETPLACE
              </Link>
            </nav>

            {/* Ações */}
            <div className="nav-actions">
              <Link href="/login" className="login-btn">
                LOGIN
              </Link>

              <Link href="/criar-conta" className="register-btn">
                CRIAR CONTA
              </Link>
            </div>

            {/* Logo */}
            <Link href="/" className="brand">
              <div className="brand-icon">
                <span>FS</span>
              </div>

              <div className="brand-name">
                <span className="brand-white">FABY</span>
                <span className="brand-orange">SHOP</span>
              </div>
            </Link>

          </div>
        </header>

        <main className="content">
          {children}
        </main>
      </body>
    </html>
  );
}


