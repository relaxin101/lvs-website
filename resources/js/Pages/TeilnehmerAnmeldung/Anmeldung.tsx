import {FormEventHandler, useEffect} from 'react';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import {Head, Link, useForm} from '@inertiajs/react';
import {InertiaFormProps} from '@inertiajs/react/types/useForm';
import ApplicationLogo from "@/Components/ApplicationLogo";

interface TeilnehmerAnmeldung {
    mkvNr: number | null;
    verbindung: string; //todo: enum
    couleurname: string;
    vorname: string;
    nachname: string;
    birthdate: Date;
    email: string;
    telefon: string;
    chargen: string;
    anreise: string; //todo: enum
    verpflegungsTyp: string;
    fk: boolean;
    street: string;
    plz: string;
    ort: string;
    notfallkontakt: string;
    bemerkungen: string;
}

export default function Anmeldung() {
    const {data, setData, post, processing, errors, reset} = useForm<InertiaFormProps<TeilnehmerAnmeldung>>({
        mkvNr: 0,
        vorname: '',
        nachname: '',
        couleurname: '',
        verbindung: 'RBE',
        email: '',
        birthdate: new Date(),
        telefon: '',
        chargen: '',
        anreise: 'privat',
        verpflegungsTyp: 'normal',
        fk: false,
        street: '',
        plz: '',
        ort: '',
        notfallkontaktName: '',
        notfallkontaktTelefon: '',
        bemerkungen: '',
    });

    useEffect(() => {
        return () => {
            //reset('password', 'password_confirmation');
        };
    }, []);

    const submit: FormEventHandler = (e) => {
        e.preventDefault();

        post(route('register'));
    };

    return (
        <div
            className="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <Link href="/">
                    <ApplicationLogo className="w-20 h-20 fill-current text-gray-500"/>
                </Link>
            </div>

            <div
                className="w-full sm:max-w-5xl  mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <Head title="Anmeldung"/>

                <form onSubmit={submit} className="flex">
                    <div className="mr-4">
                        <div className="mt-4">
                            <InputLabel htmlFor="mkvNr" value="MKV-ID"/>

                            <TextInput
                                id="mkvNr"
                                type="number"
                                name="mkvNr"
                                value={(data.mkvNr) ? +data.mkvNr : 0}
                                className="mt-1 block w-full"
                                onChange={(e) => setData('mkvNr', +e.target.value)}
                            />

                            <InputError message={errors.mkvNr} className="mt-2"/>
                        </div>

                        <div className="mt-4">
                            <InputLabel htmlFor="verbindung" value="Verbindung"/>
                            <TextInput
                                id="verbindung"
                                type="text"
                                name="verbindung"
                                value={data.verbindung}
                                className="mt-1 block w-full"
                                onChange={(e) => setData('verbindung', e.target.value)}
                            />

                            <InputError message={errors.verbindung} className="mt-2"/>
                        </div>
                        <div className="mt-4">
                            <InputLabel htmlFor="couleurname" value="Couleurname"/>

                            <TextInput
                                id="couleurname"
                                name="couleurname"
                                value={data.couleurname}
                                className="mt-1 block w-full"
                                isFocused={true}
                                onChange={(e) => setData('couleurname', e.target.value)}
                                required
                            />

                            <InputError message={errors.couleurname} className="mt-2"/>
                        </div>
                        <div className="mt-4">
                            <InputLabel htmlFor="vorname" value="Vorname"/>

                            <TextInput
                                id="vorname"
                                name="vorname"
                                value={data.vorname}
                                className="mt-1 block w-full"
                                isFocused={true}
                                onChange={(e) => setData('vorname', e.target.value)}
                                required
                            />

                            <InputError message={errors.vorname} className="mt-2"/>
                        </div>
                        <div className="mt-4">
                            <InputLabel htmlFor="nachname" value="Nachname"/>

                            <TextInput
                                id="nachname"
                                name="nachname"
                                value={data.nachname}
                                className="mt-1 block w-full"
                                isFocused={true}
                                onChange={(e) => setData('nachname', e.target.value)}
                                required
                            />

                            <InputError message={errors.nachname} className="mt-2"/>
                        </div>

                        <div className="mt-4">
                            <InputLabel htmlFor="birthdate" value="Geburtsdatum"/>

                            <TextInput
                                id="birthdate"
                                type="text"
                                name="birthdate"
                                value={data.birthdate}
                                className="mt-1 block w-full"
                                autoComplete="username"
                                onChange={(e) => setData('birthdate', e.target.value)}
                                required
                            />
                            <InputError message={errors.birthdate} className="mt-2"/>
                        </div>
                    </div>
                    <div>
                        <div className="mt-4">
                            <InputLabel htmlFor="email" value="Email"/>

                            <TextInput
                                id="email"
                                type="text"
                                name="email"
                                value={data.email}
                                className="mt-1 block w-full"
                                autoComplete="username"
                                onChange={(e) => setData('email', e.target.value)}
                                required
                            />

                            <InputError message={errors.email} className="mt-2"/>
                        </div>

                        <div className="mt-4">
                            <InputLabel htmlFor="telefon" value="Telefon"/>

                            <TextInput
                                id="telefon"
                                type="text"
                                name="telefon"
                                value={data.telefon}
                                className="mt-1 block w-full"
                                autoComplete="username"
                                onChange={(e) => setData('telefon', e.target.value)}
                                required
                            />

                            <InputError message={errors.telefon} className="mt-2"/>
                        </div>

                        <div className="mt-4">
                            <InputLabel htmlFor="chargen" value="Chargen"/>

                            <TextInput
                                id="chargen"
                                type="text"
                                name="chargen"
                                value={data.chargen}
                                className="mt-1 block w-full"
                                autoComplete="username"
                                onChange={(e) => setData('chargen', e.target.value)}
                                required
                            />

                            <InputError message={errors.chargen} className="mt-2"/>
                        </div>


                        <div className="mt-4">
                            <InputLabel htmlFor="anreise" value="Anreise"/>

                            <TextInput
                                id="anreise"
                                type="text"
                                name="anreise"
                                value={data.anreise}
                                className="mt-1 block w-full"
                                onChange={(e) => setData('anreise', e.target.value)}
                                required
                            />

                            <InputError message={errors.anreise} className="mt-2"/>
                        </div>

                        <div className="mt-4">
                            <InputLabel htmlFor="verpflegung" value="Verpflegung"/>

                            <TextInput
                                id="verpflegung"
                                type="text"
                                name="verpflegung"
                                value={data.verpflegung}
                                className="mt-1 block w-full"
                                onChange={(e) => setData('verpflegung', e.target.value)}
                                required
                            />

                            <InputError message={errors.verpflegung} className="mt-2"/>
                        </div>

                        <div className="mt-4">
                            <InputLabel htmlFor="fk" value="Führungskurs"/>

                            <TextInput
                                id="fk"
                                type="text"
                                name="fk"
                                value={data.fk}
                                className="mt-1 block w-full"
                                onChange={(e) => setData('fk', e.target.value)}
                                required
                            />

                            <InputError message={errors.fk} className="mt-2"/>
                        </div>


                    </div>

                    <div className="ml-4">
                        <div className="mt-4">
                            <InputLabel htmlFor="street" value="Straße & Hausnummer"/>

                            <TextInput
                                id="street"
                                type="text"
                                name="street"
                                value={data.street}
                                className="mt-1 block w-full"
                                onChange={(e) => setData('street', e.target.value)}
                                required
                            />
                            <InputError message={errors.street} className="mt-2"/>
                        </div>

                        <div className="mt-4">
                            <InputLabel htmlFor="plz" value="PLZ"/>

                            <TextInput
                                id="plz"
                                type="text"
                                name="plz"
                                value={data.plz}
                                className="mt-1 block w-full"
                                onChange={(e) => setData('plz', e.target.value)}
                                required
                            />
                            <InputError message={errors.plz} className="mt-2"/>
                        </div>

                        <div className="mt-4">
                            <InputLabel htmlFor="ort" value="Ort"/>

                            <TextInput
                                id="ort"
                                type="text"
                                name="ort"
                                value={data.ort}
                                className="mt-1 block w-full"
                                onChange={(e) => setData('ort', e.target.value)}
                                required
                            />
                            <InputError message={errors.ort} className="mt-2"/>
                        </div>


                        <div className="mt-4">
                            <InputLabel htmlFor="notfallkontaktName" value="Notfallkontakt - Name"/>

                            <TextInput
                                id="notfallkontaktName"
                                type="text"
                                name="notfallkontaktName"
                                value={data.notfallkontaktName}
                                className="mt-1 block w-full"
                                onChange={(e) => setData('notfallkontaktName', e.target.value)}
                                required
                            />
                            <InputError message={errors.notfallkontaktName} className="mt-2"/>
                        </div>

                        <div className="mt-4">
                            <InputLabel htmlFor="notfallkontaktTelefon" value="Notfallkontakt - Telefon"/>

                            <TextInput
                                id="notfallkontaktTelefon"
                                type="text"
                                name="notfallkontaktTelefon"
                                value={data.notfallkontaktTelefon}
                                className="mt-1 block w-full"
                                onChange={(e) => setData('notfallkontaktTelefon', e.target.value)}
                                required
                            />
                            <InputError message={errors.notfallkontaktTelefon} className="mt-2"/>
                        </div>

                        <div className="mt-4">
                            <InputLabel htmlFor="bemerkungen" value="Krankheiten & sonstige Bemerkungen"/>

                            <TextInput
                                id="bemerkungen"
                                type="text"
                                name="bemerkungen"
                                value={data.bemerkungen}
                                className="mt-1 block w-full"
                                onChange={(e) => setData('bemerkungen', e.target.value)}
                                required
                            />
                            <InputError message={errors.bemerkungen} className="mt-2"/>
                        </div>
                    </div>


                    <div className="flex items-center justify-end mt-4">
                        <PrimaryButton className="ml-4" disabled={processing}>
                            Anmelden zur LVS
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    );
}

