import { Head, usePage } from '@inertiajs/inertia-react';
import { NavBar, Alerts, Footer } from '@/Components/';

export default function CommonLayout({ title, auth, alerts, messages, children }) {
    return (
        <>
            <Head>
                <title>{title}</title>
            </Head>
            <main>
                <header>
                    <NavBar auth={auth}></NavBar>
                    {alerts}
                </header>
                <article>{children}</article>
                <Footer></Footer>
            </main>

        </>
    );
}
