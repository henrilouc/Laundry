<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <style>
        img.center {
            display: block;
            margin-left: auto;
            margin-right: auto
        }
    </style>
    <title></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-secondary ">
                    <div class="card-header text-white bg-secondary">
                        <img style="margin-left: 270px" class="center" alt="lavai logo" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAASABIAAD/4QBMRXhpZgAATU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAf6ADAAQAAAABAAAAgQAAAAD/wAARCACBAH8DASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9sAQwACAgICAgIDAgIDBQMDAwUGBQUFBQYIBgYGBgYICggICAgICAoKCgoKCgoKDAwMDAwMDg4ODg4PDw8PDw8PDw8P/9sAQwECAgIEBAQHBAQHEAsJCxAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQ/90ABAAI/9oADAMBAAIRAxEAPwD9/KKKKACiivJfi18a/h98F/DsniLxzqkdlEAfLjyGmmYfwxR9WP6DuaunSlOSjBXbE2lueslgoyxwK8y8efGT4afDS0N5428Q2elIOizSqHb/AHUyWP4CvxE+Ov8AwUa+Jvj6a50f4Zg+FdFfKCYBWvZFz1L8iPI7Lz71+eGratqmvX0mpa1eS313MSXlmcyOxPqzEmv0LK/D2vUSniZcq7LVnDPHpfCj+gHxd/wUx+AOgSPBoqajr8i9DbQBIz/wKVl/lXimof8ABV7Q1Y/2X4GunTsZrpFP5Kpr8WaK+to8A5fFe8m/n/kcjxlRn7R6f/wVf0VpF/tPwLconcxXSMfwDKK9p8I/8FNPgJr0iQ65FqWguxxm4gWSMf8AAomY4/Cv586KqtwFl017qa9H/ncFjJ9z+tXwF8afhj8TLYXXgnxFZ6qDglIZVMi5/vRnDD8RXqKsrDKnNfxz6bqmpaNeR6jpF1LZXUJ3JLC5jdT6hlINfoN8Df8Agop8Uvh9NbaT8RS3izREwhdsLexqOMrJwHx6P+dfI5p4eV6acsLLmXZ6M6aWOvpI/oUorxz4Q/HT4d/Gzw/H4g8Daml4mAJYWws8DY+7JHnIPv0PY17HX57VpSpycJqzR6EZJq6Ciiisxn//0P38oorwz9oP42+HvgR8OdQ8Z624eZFMdpb7gr3FywOyNc/mT2GTWtCjKpNU4K7ehMpJK7PPP2pf2qvCn7PHhk7yuoeJL5GFlYqw3E4/1kndYwe/foK/nS+J/wAVfHHxg8UXHizx1qL313KTsU8RQoTwkaDhVH/66q/Ej4jeKPir4x1Hxv4uumub/UZCxyfljQcKiDsqjgAVwlfvPDPDNLA01KSvUe77eSPFxFdzfkGKKKK+qOcUAk4UZJ4wK/TfTfhN+zx+zD8PNB8VftCaVP4u8Y+JYRcW+kROUS3hYZG4blHHQs2eeAOK/MqKRoZUmT7yEMPqOa9m+Lfxh8eftCeLdM1XxJBHPqMFtDp9tBaRkbgp4wvJLMx7fhXjZrgq1edOCly09eazs/JGtNpa9T7RvPhX+zr+1F8P9f8AEP7P+kzeD/Gnhq3a7m0mVyyXEKAn5RuYc4wGXHPBHNfmOyNG7RuMMpIIPYjtX6u/sv8Awr8QfsveG/GHx3+NCDw/C+lTWVjYTsFuLiWT5gNmepKgKvXnPavyqvbn7be3F5t2+fI8mPTcc4/WvP4eq/va1OnNzpxas2769VfqVW1Sb3KtFFFfUmB3nw5+Jvjb4T+JrfxZ4E1KTTr+A87TlJF7pIh4ZT6Gv6Jf2VP2svC37QfhwQylNO8T2KD7ZYFhk9B5sXdoyfyPBr+Z6uy8AePPE3wz8W6f408I3bWepadIHRh0YfxIw7qw4INfL8ScMUsfTvHSotn+jN6Fdwfkf17AgjIor5+/Zx+OugfHr4c2PjDSSIrrHlXttuy1vcL95T7Hqp7ivoGvwStRnTm6dRWa3Pci01dH/9H9+ZJFiQuxwBX83X7dvx6m+L3xbutC0u5L+HfC7tbWyq2UlmHE03pyw2j2Fftf+1z8VP8AhUfwL8R+JbeXyr+aH7JZnOD9ouMopHuoy34V/LnI7yyNJISzuSWJ7k9a/TfDvKFKcsZNbaL16s83H1NOVDKKKK/WzzQr6Z+DX7Jnxh+Nlidc8O2Cafoikr9vvm8mBsddmRlx7gY968w+DngyH4ifFPwt4IuW2waxfwQSkdfLLZf/AMdBr9Bf2ivEXjP4m/G9P2Yvh1qP/CK+DvCNt5c4jYwwLHaxeZNNNswWVF4C9z7mvns5zOrTqKhQsnZybeqSXl1ZvTpprmZwv/DuD4kdP+Ey8Pf+BLf4V6Z8Iv2PbL4D+O9O+LPxe8d6JDovhpjdiOCXe0sqD5F+bHQ84AJJ4Ar56X4KfChtGfxFH8Q/E1xpUQYtfReH7hrUhThmEnm4257mm+Mfgn8BvCtnoV34k+K2qtD4hsk1C0xo7SZgdmUFh5/Byp4r52pi69ZOjPEO0tNKbv5+mhtyRWvL+J9Y/Hr9nrXf2ovFH/Cxfh58UtP1LwvqKpLbWV7dMEs22BWVEBIGSCcEBhkg14R/w7h+JKjjxl4ePt9ob/CvF4PBn7NEREVp8WNZjLkAKmiOMnp0E1eta3+zB4O8PeHI/F2ueNvFGn6PKFb7VNoUojRX+60gE5ZF9yKilVrYWMaEK7jHZXpu/wDwQsp62/E8Y+Mf7Ivxi+C2nf2/rljHqeiZwb+wbz4U9N+BlQexIx718wV+pX7PXiTxn8KPjbZ/s8+NNW/4S/wL46t1FsZS0tvLBcxM8M0SvkoGxtZfX3FfBPxw8E2/w4+Lvi3wTZHNrpOoTxQ+0W7cg/BSBX0eTZpVqVXh67TduZSWiavbbo0YVaaWqPK6KKK+kRifZn7EPx5ufgx8XbOx1G4KeHfErJZ3iE/JG7MBFN9VY4J9Ca/pVt5kniWRCGBHUdDX8cCO0brIhKspBBHYjvX9O37GfxWb4r/Afw9rl7L5mpWcbWN5zkmW2OwMfdk2t+Nfk3iLlKjKOMgt9H+j/Q9LA1d4s//S9z/4Kr+M3TTPB/gKGTC3E0t/KoPURL5aZ/76avxgr9Hf+CneqyXvx80/TmbKWGkQYHoZZHY/0r84q/oHg7D+zy6l56/ezw8U7zYUUUV9Oc52Xw88YXfw+8daF42sV3z6LeQ3QX+95bZI/EZFfpzH40+DXxA/aX1T4k+DLqXUrHXPBupXGs2qKYZIplg2vGrsMbygGTggHua/JSvqX9kwf8Vv4o/7FbWv/RBr5ziHLoThLEXakotfJm1KbWh2kXx2+Blr4dbwhb6V4yi0NkZDYrrwFsUY5K+Xs24J6jFdfc+J/hH8abXQrHTvhN4r1aLw3Ypp9sbK6DgQoxYb2WEgnLHmvMfgB8HdK1LTIviP4z02TWobq8/s/QtGRth1W/A3N5jfw28Q5kbj0zXvfj/42+CvBl2fDfiTXdT8Ranany5NK8LzjRtDsmHHko8a75mXoWzgmvDxVKjCt7PCqUpLf3nv1/4Ldl5m0W7XmefRw/A34W+JtI13xT8IvFmk/YLuCcNfXIMOY3DAsphAYDHIzz0r0SDxP4J8I+M/G3xa8W/EyDxd4U8T2l5FDosE8jXt2LsYSGSFxth8nPDHgY4rZ0D4k6Wb2Hw615r3gfUdRwlvY+J5v7Z0K+L9IZGlXdHvzjeDgZ5r54/aD+DWnWulX3xC8JaV/YV1pVytp4i0RW3pp9xLzFNbt/FbT9UPOOma56cI1aqpYiTi2rXvdNX87216psUZpx5qdmvI+no/F3wU8F/G74ffEfxbcT6No+heC7S70i1kBnkkmIkWOJ3ReWCk4OACa/M/4meNLn4jfELxF46uk8t9bvproJ/cWRiVX/gK4Fe2ftPcp8Mj/wBSfpn/ALPXy3X0fD+XQhBYi7cmra9EmzOtPoFFFFfSGAV+wv8AwSs8Zy+Z408AzSfu1EGoQKT0JzHJj/x2vx6r9Cf+CaupvY/tAzWYYhb3SbpSOx2Mjj+VfNcYYdVMuqp9Ff7jfDyamrH/0+a/4KWwNF+0YsrjibSbQj6AuP6V+fFfqz/wVR8LyWvj7wl4tVP3V7Yy2jNj+OCTcP0evymr+huEqqnl1FrorfceFiF77CiiivojAK+p/wBkvjxv4oP/AFK2tf8Aog18sV9T/slf8jx4o5x/xS2tf+iDXlZ3/utT0NKe59YavM/w9+H17faJ8kvg7wBposSOqXOvTn7TcLjo+07d3YV88/CvwN4k+IHhXSPBuq+FI9M06yvRez6vKmyeaPdu2JkbmLZxnOMV7Z8PvE+hePPhZpuva5Mf7LOkHwd4mK/M9kiSebp1+V5zGrHax7VqaL8Rr/4NWtt4E+MltLafZECWOrQI09je2w/1bpImeq4/rXwsatSlCpThG9S/z+Xzu/mmeVxIq/sU6Mbv56Hr3xF8H6R4v8F6hoWpRKU8hzE+BuidFJR1PYqQK5W88SeG5tTv/gVqOiG91O+8ABbnW5Z2M0whtDdRb48bCY2wFY8gCuN1r4pah8WYZvAnwUs5tSur5GjutSkRobOxt3GJJZJHwBtUk5PT3Nbfjj4o2vgn4P6/f2ptb+xg0iPwpourSW6fbtUvNhS8uEmI3m3hTKr2PFeZSwtWKjTmm23or6pu1n/wDi4RwlelTm6qaT6M+N/2nxt/4Vmvp4P0z/2evlmvqX9p7JT4ZE9/B+mf+z18tV+m5J/usPn+bPoq3xMKKKK9UzCvvT/gnLbST/tHW7oOItLvWP0Kgf1r4Lr9Qf8Aglv4alvvil4n8Tsv7rTNMWDd233Eg4/JDXz/ABVVUMurN9jbDq80f//U+7P+Cknw4m8YfAp/EdjF5l14Xu47w46+QwMcoH/fQb8K/nmHSv7BvFvh3TvFvhvUfDerRiaz1KCS3mQ90kUqf51/KL8YPhtqvwk+JGueAdXU+Zpk7LG5GBJC3zRuPZlIr9c8OcyTpTwsnqtV6dTysfTs+Y80ooor9MOAK+pv2S8f8Jx4oB6f8ItrX/og184+H9IfxBrdjocdzb2TXsqxCe6k8qCMt/FI/O1R3OK+8v2P/h5P4V+ImreKNZ1/QY9NtYdR0hjcXO9ZXlj2rKkZUCWEtgZyMjNeHxDiYQwtSLettF3NKS11Pjr4Z/FDxV8KfER1/wAMSo3nIYbm1nXzLe6gb70UqHhlP6dq+1/Bf7SfwqisPs9hrOufD4SZaXTRbQ61owc9TDFcHfGD6dBWwnww8eWXjS/8WW918MpzdQrbiB8fZQsZJEiRbPldu5zXT/8ACPfEf/nh8Jv+/S//ABFfNZhjMNiGpOGvfmt+cXc6ISt1OD8ZftJ/Cu401rPUtf1zx5GvzJpcdrBoeku46eekB3yLnqvevin4pfFTxP8AFbWo9V8QeXbW1nGILKyt18u2tIF6RxJ0A9T1Pev0R/4R74j/APPD4Tf9+l/+IqSLw78RWkVZIvhMikgFvJBwPXGypwONoYd80YJvu5flaIpu+jkfIv7Tpyvwy/7E/TP/AGevluv08/aY+DF38UvE+j6zofi/wnY2OkaTaWDE3otYjLECXMcQRgibmwoz0r84PE+gyeGNfvtAlvLbUHsZDGZ7OTzreTHeN8DcPfFfScO46nUw0IJ+8r3XzMatm7owqKKK9+xkHSv3+/4JpfDmTwz8EpvGFzFsufFd28ykjBMFvmJPwJDEfWvxC+FXw+1f4p/EHRPAmiRmS41W4SNiBkJHnLucdAq5Jr+rjwL4U07wT4V0vwrpCCOy0q2jtolH92NQM/j1r808RsyUaUcIt5av0X+Z3YKneVz/1f38r8x/+Chf7M0vxG8Kr8UPCFt5niDw9G32iNFJe5shlmAA6tH1Htn2r9OKguIEuYWhkAKsCCCMjBrvyzMKmFrxr091/VjOrTUlZn8b5UqSrDBHBFJX6o/tx/sXXnhHUb74t/C+xaXRblml1GxhUs1q55aVAM/uzyW/u/Tp+V1f0Nk+b0sbRVak/VdUzw6tNxdjovCXhfVPGviKy8L6Ns+2X7FY/MbamQCxyeccCvVfEvib4y/CDUk8CXOvvbCxiQpHAyvGEYZUAlc/nVL9nf8A5LL4aH/TaT/0U9e2ftIfCn4geJ/iRd+IdC0aa705bWIGZNuMop3d88VyYzGw+txoVrctr69zwcTjIrFKjVty2vr3PCY/jR8ZpkMkGv3roOSVRSB+O2ox8bfjC6M6+IrtlX7xCrgfX5a/RL4e6TrPg/T/AA14W12S1m+02xXy7axYg7EzmSYHaCM8kjmuK8O2/hy4+I3xF+EYs4YIdQhFzAoVRhpYVWTb9CwbivGjnOHbklRTS1vptez6HjrNKLcrUk7flez6HxCfjZ8XxGJj4iuwh6NtTH57cU+H41fGS4OLfxBeSn/YVW/kte7ftGGz8C/Djwn8KrRIhdRxrNcsoGcRgjr1+ZyT+Fdz+z7put+FvhjZ+IZ57ZLLUboFFjsmurgq77MMyEEAkehxXZPHYdYb6wqS1dltr+B1TxdFYdV/ZLV2Xn+B8sWHjP4i/EnVLbwL4i8SyRWOpSKkzXO1Y0Vfmy3APGPUc1554t0Oz8N+I77RLHUI9Uhs5DGtzGCEkx3AOfp1r9QdX8PaLb/Hrw7fwWUUct7pl6ZcIBvKFNpI9RuPPWvzr+NUaRfFfxRHGoVReyYAGAPwFdGUZlGtV5aceVct7ab3N8qx6q1OWEbLlvb5nl9H86K/T39iP9i6+8d6jZ/FX4nWLQ+HrVxJY2UylWvXUgq7A/8ALIH/AL6PtXo5tm1LBUXWrP0Xd9j6SnTc3ZH05/wTv/Zom8C+H3+Lfi+08rXdei2WUcgIe3syQdxB6NJgH/dx6mv1OUBQAO1VrS1jtYVijUKqgAADAAHQCrVfzxmeY1MXXlXqbv8ABdj3KNNRjZH/1v38ooooAq3dpBewPb3CCRJFKsrDIIPBBB6g1+SX7U3/AATvt/EFxd+OfgikdlqD75Z9JOFhmY8kwNkBGJz8p4PbFfrvTWVXG1hkV6OWZrXwdT2tCVn+D9TKrRU1Zn8h89n46+E3i5ft9rc6Br2mO2FmjKOjDKk4YYI6+oNdpdftD/GC8tpbS48QyGOZSjARxgkMMHkLmv6Wvij8CPhj8X9OOn+OdBt9SIBCTMu2eLPdJR8w/OvzD+KH/BLWTzpr/wCFXicIjElbLUYzx/siZO31X8a/UMBxtgcS19cgoyXW10eJicqjJ80opn5swfH74t2tha6bB4hmWGzx5fyoWwowAzFcsB6HNcsnxJ8bJ4wfx4uqONcfg3AC5I27cEY24wMYxXvHi39iL9pXwi7+f4Qm1OFD/rbCRLgEeyqd3/jteO3vwT+L+nsUvfBWsQsP71lN/wDE19dhq2AmnKnKOvmjkWX043tT38jlfFXjDxH421U614nvWvrwose9gBhV6ABQAK6bw58YPiN4T0NvDmga1LaWBJKoApKE8nYxBK/gaktPgp8X9QISy8F6xMx6bbKb/wCJr13wn+xP+0p4ukj+z+D59OhcgebfOluoHqQx3f8AjtXicVgYQ5ak42XmjR4OMoqHLojyeb42fE641u08RT63I+oWETwwylU+VJMbhjbg5wOormLax8Y/EzxU0en2lxret6rKWKQRmSSR26nao4/kK/VT4Z/8Etbp5YL74qeKFEYIZ7LToySfVTM+Mfgtfp38K/gD8L/g/YCy8DaDb6c5AD3G0Pcy47vK3zH88e1fI5hxvgcOmsJHmltorI6sPlcYu6ikfnJ+y7/wTsTSri08b/HKNLm6QrJBo4+aND1BuGBwxH9wcepPSv16sbG3sII7e3jWNI1CqqgBVUcAADgCrSIsYwop9fluaZtXxlT2leV307I9ilRjDYKKKK801P/X/fyiiigAooooAKjl+6akqOX7poYGWe/41SuKunv+NUrit6XxGctgh6D6irQ61Vh6D6irQ61hX+IhGlbfdNWarW33TVmg2WwUUUUDCiiigD//2Q==">
                        <h1><b>ROL</b></h1>
                    </div>
                    @foreach($transactions as $transaction)
                    <ul style="list-style: none;">
                        <li><b>NOME:</b> {{$transaction->name}}</li>
                        <br>
                        <li><b>ROL:</b>  {{$transaction->id}}</li>
                        <li><b>PESO(KG):</b>  {{$transaction->amount}}</li>
                        <li><b>DATA ENTRADA:</b>  {{$transaction->created_at}}</li>
                        <br>
                        <li><b>RECEBIDO POR:</b></li>
                        <li><b>DATA DE RECEBIMENTO:</b> {{date('d/m/Y H:i ',strtotime(Carbon\Carbon::now()))}}</li>
                    </ul>
                        @if($transaction->single_purchase == 1)
                            <ul style="list-style: none;">
                                <li><b>VALOR:</b> R${{$transaction->value - $transaction->discount}}</li>
                                <li><b>DESCONTO:</b>R${{$transaction->discount}}</li>
                                _____________________________________________________
                                <li><b>TOTAL:</b>R${{$transaction->value}}</li>
                            </ul>
                        @else
                            <ul style="list-style: none;">
                                <li><b>SALDO:</b> {{Auth::user()->credit->amount}}KG</li>
                            </ul>
                        @endif
                    @endforeach
                    <br>
                    <p style="width: 50%">As peças eventualmente não retornadas
                    necessitaram ser submetidas a tratamento em
                    separado e deverão retornar na sua próxima
                    remessa.</p>
                </div>
            </div>
        </div>
    </div>
</body>


