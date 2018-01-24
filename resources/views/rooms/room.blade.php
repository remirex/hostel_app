@extends('layouts.app')

@section('content')
    <a name="apartment"></a>
    <div class="container">
        <div class="row">

            <div class="col-sm-8" id="slider">
                <h1>Gallery room</h1>

                @foreach($image as $img)

                    <img src="{{asset('images')}}/{{$img->images}}" id="current">

                    @endforeach

                @foreach($images as $image)

                    <img src="{{asset('images')}}/{{$image->images}}" class="thumb">

                        @endforeach
                <!--
                <img src="john-salvino-263672.jpg" id="current">
                <img src="john-salvino-263672.jpg" class="thumb">
                <img src="nastuh-abootalebi-284877.jpg" class="thumb">
                <img src="roman-bozhko-251412.jpg" class="thumb">
                <img src="gina-manzeck-97522.jpg" class="thumb">
                -->
                <h4>The space</h4>
                <div class="row">
                    <div class="col-sm-6 description">
                        <p><i class="fa fa-fw fa-male"></i> Max people: 6</p>
                        <p><i class="fa fa-fw fa-bath"></i> Bathrooms: 2</p>
                        <p><i class="fa fa-fw fa-bed"></i> Bedrooms: 2</p>
                    </div>
                    <div class="col-sm-6 description">
                        <p><i class="fa fa-fw fa-clock-o"></i> Check In: After 3PM</p>
                        <p><i class="fa fa-fw fa-clock-o"></i> Check Out: 12PM</p>
                    </div>
                </div>
                <h4>Amenities</h4>
                <div class="row">
                    <div class="col-sm-6 description">
                        <p><i class="fa fa-fw fa-shower"></i> Shower</p>
                        <p><i class="fa fa-fw fa-wifi"></i> WiFi</p>
                        <p><i class="fa fa-fw fa-tv"></i> TV</p>
                    </div>
                    <div class="col-sm-6 description">
                        <p><i class="fa fa-fw fa-cutlery"></i> Kitchen</p>
                        <p><i class="fa fa-fw fa-thermometer"></i> Heating</p>
                        <p><i class="fa fa-fw fa-wheelchair"></i> Accessible</p>
                    </div>
                </div>

                <a href="{{route('check_room')}}" class="float-right button">BOOK NOW</a>
            </div>

            <div class="col-sm-3 ml-sm-auto blog-sidebar">

                <div class="sidebar-module">
                    <h4>Follow Us</h4>
                    <ol class="list-unstyled findus">
                        <li><a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIPSURBVGhD7ZnLSwJRGMWl/ojqj9GpVtEDZgTtvWghVKsWQcuQWkUPCAqEoNBdrcqZygKF3mEPMip30SIqjKDIIiJvc/VzpPwEnSHvTNwDv5V3jufMfSzm2ri4uLj+l1yuxUpBCrY5JCXgEJXNMuO3O5VW2/BwBcTRJ7u0VuMQ5aggKYQxh4JLroZYpYnOhDoLB4gpK/Z0zQxdTogZU9LLrFTRPYGZsYTuGYhXvARRCWNmTFEzQbzi5ZDkbdSMITQTxCtef12koz9CRiZPyfTcBfH54xp9Q7voeIqpirg9YXIceySF5AvE0ecopinS2Bkit/dJiIzLEkVm5y8hbmFZosjxWf6S+vpKkfOrJ3J0lkjjnThFn6WYpsjdwxvEz4nOEjYWwzRFnl8+IH5OQ6NRdCyGaYq8Jj8hfk6WKFLnXCXtvRGN5Ft+kbGZ2I8xTV0bqBeFWRF63Jaq0SkTbnY9RTyDO6gXxTJFUilCGtrXUS+KZYo8JN5RnyzMitQ6FdLcvaGBnVre8RPtd1oc88nCrMhvLHv8/oYXAXgRzMwIvAjAi2BmRuBFAF4EMzMCkyJ/8cnUaBF9n0xFxY+aGWApeE1WQjc/6BnYQsdi6PuIbcJrBUGSXRCveGWu3JS9fDNm6LvooYKrt33EtNzs1rcsV0EsnVLfglrGrZotwAVl2cj8p+w2fBnKxcXFZTLZbN9S86sn1aGunQAAAABJRU5ErkJggg=="></a> </li>
                        <li><a href=""><img src="data:image/png;base64,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"></a> </li>
                        <li><a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMqSURBVGhD7Zg7aBRBGMfX3TvBRrFQFMEHqFiIiDZ2QkC00cqAxCqYQkUQxMInIQRNIaYIiAFRUDGZWS6C2FloYWPlk4AgaqGixaF3N7OJz2z+s/ep590Y93ZnNxbzgz+7uex+r3nszDgWi8VisVhmi9LECpcH+z0mBz0uL7hMnirw2lbHDz16opUwnEN3CeFT89IbIcbkUgQ/4nHxAwmELWLyhceCnfR0nRuVhS6Xp5FsN/2SDBg56jExQH8mpsjEeth5q02gUUxMQWdUi7lc3MZ9gMTfOf7HBWQqGajSc+UAFTlOP7UPry1CQG9ago4jJr4gkY7ITuKegW4VVei34SGnN3Tpv7GBjYsNNuKLyTJapQv3O5DMpWgcJWK0urbZOLraXYcHy+iJf3O9PB+JfG62E09C/rxX44QsJgAD7U/DJFUpJnvitI7Hg11aG21JnE094cDQh1bDdblMPEK1O2eaNtE1DuvejSUmvkcFMwGqf17rpFFMvELV+osjYgO99gskckj7ThwxWSEzBvAnlsNotcXJ38TEe7TULVz70K/34TqgfS6OYIuiMAMC2wOjjbNXPsIHkkJIR5HJTVTdTlT3JLrPV63DjBTNkEbw5RKdg/wkhimS9KAqz/ROspcaYxRGelxeO6BzkoecUnUNhWGAe2EBU+gDnaNMxeQ4RWCQ+vI7WjzmJXwIe8m7YeprpsvQN51jo8KKVxWPPBtmdHJl0ZcbMR3vxSB8og3AmMQV8mqeAgu26J0aFlbKaitMbrMBjvwWx8Yl+sldhmC7iRnssT6A9MIAf4qV9FzyljHqMICJm7pAUkmtdEu1deQlP9S2E/35GrrC6/RrMLzffHqSNwiiAwm91AcYQ9g8eby2m8zlT3S8w8VVBJJ8eY/uBG0nkzmCPuyy2kEMyjupEoAwaTzMZ0zwyVWo+DCCvk/Lk/i7xJnEpMAH9YRaw5GnHOgNXSTSraZFbVDtiMlP0KAzJhaT9dmh6AebEdAQghlHS+nPbpvFZBli6EZd0Rnyfwc+jEhmG1qqx/XlMYyXc6rauPYh6CPqLMvhldVJTiUtFovFYrFYHGcazS5/dDE9KGwAAAAASUVORK5CYII="></a></li>
                        <li><a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAUnSURBVGhD7VZrbBRVFC4mJmo0/tGfmqjxj0ZjYmKJwTR2Zy1QaQm0trON9DG7C0gt1iK1bB9KHwQqKqQVy6MxIiZAtbEYbNrgIxILCRiitb5iorZiaaLBuvPY2e5czzlz7/aRoZHO1m5xv+Ts3nvOved839w7c29aCimkkML/B17Z3+qVlX6vT8nnrjSvz/8G+WRlFXclP0BADRBnkqwcx35GcfENks8fQd/jBYF7aNBigMcXeICE+Pxj0F0iyYEM7IMN2SMWEWB7/YTkswr998N/LReyg4dBbOnd3sJAek5Z2S3clZyQZP8eTn4TbLVebEtF/qUPB4PXw0p18xhuvz+9RWVP2HOCy7j/Q+zDwziCfY9P8WF/QQDbS7JJKV0gahwIX2poaLgOfAr5ZWUE7APe/gXnJKUQfPIg4jInhnYA/ZMrpVRiH9qj2F+eV3p7UgpBANmjnBhsq0CO7YPPMJKTlY3Uh9Wg+NPBO5NWCBIgkvDpXZpXeSP6oL/4hEwSUy5zV0oI9hcM17QQ+AyHiLisHJTk9fdKPsUAMSadL3w8xM7jYSlEJqWQzKLS+5C47RemdFGsUHlQ+OADMQGChrG94EKAxENA6BwQ/ZS7CHj3ApInIP4FbJ9XpPzgrTy0BHyd4PsET3toN+F8T6GynMdTSDjYkY7b9P3775pq6OPhhYV5qC1dD1VdUEvytHDhKjO8NisWzs20yHLAPI+wqzKcI+ZjLsiJufW6qi+xFi+bWETaXisL53qunuxcDWpF2neX8vKJATvWdjOtgFPBeTTVl2uyjo6bOA33MPbu2oqJjR0NzBofdzTznU5HMmhm9zEaE+076RifzbA2p+Eexs6XD2PSyOs72ZVg9nQ5EkGLnuqlMRNnTjvGZzOszWm4h95UdwKTan6ZRQ60sWjPe0QMEf24j3z68xsciaC5EaI319I1JiEwGkN905JvDhAxhNFcZ/u2ljNjew1T5Rym5q+ktr7tOYpNFaJv2cSM1kamrvbE82EbXmxmHj3MjKYQC0vp8RjW5jTcQ6+vHhCJ0ZyEWJd+pz5uP/QhrPDfFBNCWDRq/wNiP35HhNW1WcwaG+VeG9GPeiZrQW1Owz302qrzIjEln6MQa/wvNnHuLLURWkk+rQLCUsMs9s1X1GaWBau6wq4FZwqn4R56TeWgEEHJ5ygEt5a2bg21EZhHCIt+dgqEPUVthPasYteC2pyGe2jVFd8LEZTchRB8hwRIyNcXqB0bGZ7cggCM4VwNanMa7pHIFbmSkJkQQhK6Inr9C2eECEo+D0Ji3w4y49WWuKmrJbtW3ZaznIZ76C9VnxYiKPk8CMEx6posFvttmFkXR5gW8Nm1oDan4R5Gc6hXiKDkswnB8+Ddt6j9r172gc+pjf9IXkDbWExzsTan4R56S8P7QgSakxB8koSoaf8DZgrBGJ4fAnhTMN8+aHcMg8V+/dlumxGm5mTatVrquzkN9zB2NR4SIii5g5Bo/0nbYcXYxKC9XWYKsVQVfixqx4YG7QMR3oW4AATEI5374rWwNqfhHsa+PbkiMVnWo7D068jUJzNs34pldCXBrYM+ipcVUEwtyLbH4vWlKJeuKeGVj03my86gKw2+Xzgu7gcz3tybzWkkBtrmwMWpBf4Lg4voMC+fOGid7XdoFcqYU8H5MHhwo1iTl0889PbWDcb2bf1wtgzgYaW9WDFEVl3+Az5BYVq5MqY9U/LHNAPftDEwR8zHXJiTcrftXs/LpZBCCilck0hL+wdeCfBYPSvaaAAAAABJRU5ErkJggg=="></a> </li>
                    </ol>
                </div>
                <div class="sidebar-module">
                <h4>We accept</h4>
                <ol class="money list-unstyled">
                    <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAP1SURBVGhD7ZhbSBRRGMen3VW6geXuWiZdqdYI6iUtwSJCSIMeukIRZO2YEVEQZLeHehCqB0FcKWfWByuIsCiKiEq2Ge1C0YUwCUMKdc8UUVFZdK/tW/uQ3bOfNjs7a0vMH37sy575ft+ZOTNnRrBixYqV/zcuUZ3vFpVL8NtkBHeZcspVpu5zlwdm4yH/TVyicsVdpoZMQsn0qjPw0IOY/SGbW1TfEUKGgYn5BGeoBCsMTpyblFxKJlGgkc9jxMBMLJP8wNoopURMQVSuYZnkB4rVkRIm4dwY8GCp5AbuOg8pAbNwlSkilkpe3FuUkVDsB1+cJ2tD4P3E4pPNkxefUONl3LoLNTaZlTrqWYHQGLJjaXPj9CoLKXGeKUUNSm6eL2SE8csbVbtfC/Uia2/g94AgPc1ABXMCkhW8NMX0uUdaKUk9jFt7XulrpK8h9jRNfmHeHQ2u37OUeCRZ4rWvuXNqPlOSehi948btmEZ6Ya+Eo905qJJYYKG/oOQjyV5zsY0S1IMnr+ZbWm3ne7oRLWTzs8uoYjxjypVJlDjPxJKTKiWph6kL5LtUA33I7JcgabmoZCxwNlZT4jxTC6VblKQeMnbfHrgRwObX9qCSscCOtYoS5/Hk+Rgl+TemFUoPKPEYZCahkrHAxu4mJR5JVunV15Tk34Dm3wytag+S4hywTs6gkoGsaksPb+oo+UhyVpy7Q4kOyBxfT8a++/coaRKZ+dAq/mR6m/MpcZ4pRcfiehB68n1dIysftZLC/ZDQGoGzsY0S5/HMO/qAEuaBS+ltzsrTTY66rg+U7EA4JK0QteIPNHKCEo9CVH6C4EdSPN/3bnrBkSeTio+3OLcEVCMN/IG9TGj/BY10kPIRZG6+3jGsqr07vbbzbSR2OfidljKAzA6iUvwZu6HFTYnzjDjQeoMsbhYy6xGOMSdqxR+nV11KifOkVz9rIQVMAm6761HJWODar6TEeexSsIMSMAdWgzrGAzveq5R4JM7y5o9Q7CctkSCyVimEQkNQx2B0fvoZVXFP3/YiHmT2GG4Ui9AksYQ/z1DiPMMOtce+DBmCvQxvQez+4JLwJKJG4nGJzV5KnCettusOLRYNvIvvtNezVVFIz0scdcG5sD2fgGXND+x46ylxHpjBV5R4JNDEIzzs4EfPQs/cerObEo+F1eNhBz/hj8tw+90JC35XfwyvfFxNi0djkzUvHjY1AzOtq5E0f3AWDknNwEzrWOjsQ9I+tpmSxrZ0EP0SKx4NvEMEcERqxuHvzqfEY5DZYRySmrFJ2nZSnEfWluGQ1AwINpDiHEJdZzYOSc3Y/c+L4UF3BdZAU7/I2l78uxUrVqxY4SIIvwFUobBOugsu9wAAAABJRU5ErkJggg=="></li>
                    <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQ6SURBVGhD7VhpbE1BFO4/ib+62PlBSRDEEqIRwg+EIJL+IRK8VhWxxFr71iIi9ipBiCKxpkQX9C36vJZuSrWKUktpVUtVed7rO+bMnbl3bu4l9fxww3zJl973nZkz58ycmbm9IRISEhISEhI/QbtY++BQmyMxLMaeYiViTBgbC/PXYAkEwmIcYE2S2GyOzSxcc4TbHFPNO1uP4bbsySxsI0JjHBlmnaxIUjnpLGwjiPGpWScrEmNlYRsRZrNXmXWyJEmsLGwjZCJ/gzIRq7E1iXSJy4Se86/qGB5rNzjrtuA2jN1aQDlmSz7VotbfVTW0i+3bz3XCwJUeiNpwDzrHu3Q2zoGrctX++GzWhrK1icQnroPytEgAZxvK+qwwmLFpu87ZitQK4HCV1VOt9pOXKQADSNCoDUnIg2sF78HrCzALQIA8llR91vkLj3VAZU0za0GGfaT4NGVrEuGMiM2GI2d2QcDThSZTcrmPzpn7cQMbEiDmSCn0WJTDfgE0ffPTwHovdUONkJyIoheNOn/Re0qYRUHDF5/OruPvJILstcQNAW8dQPFoaHG2hc5xWVTvu+wOtLAJrmv8Dp3mOWF8UqEiEPAg15x7whSAvCcfYfi6uxC5OAem7iqGhSfKdWNlP/zAWmrA1RTbqPzdRJClr5oAWr6Cv3AURG85RrVVZ7QAD2a+pNqC42VMATifW0O1pCvPmQKQUVxHE+Z+RQ5dk0fLDZFLEuawpZSatg8qkZSbrxWv3hpIvbibap4KZTAcHGcZtb3pVVRDbLtcSbVJO4uYouB5bTPMPfqIlh33jzx6SxkD99E4YWX5JBkYTCIzDjxgbgEuufKg33KtrHLKG9R214veKyLBrGRtJnFV/LwDQ+Z9bXW6k9Pt81c/1dPya2mSjey3q0zzr2MwieAm5oFg7Sec1coqjswub1de/YWpQI9Y0ceoTfm0tETgqYe21YK/6fsfUA0nCPGp2WdYPcpgEkEWVDZSx15fi/pc34SbXLkPOpA74rtfSdZHku4YZ74Xjtvf0DYILCcM8plw5KbmvIWTzmqoeKtNyrC1Jhs+2ET2Z7xkbjUk33il2nEwjqfvmqmGl+Ty0xUwcuM9evrhX3tpPWsFMPPgQ8ORawbcU3wclcEmYjbgCHKLc7u4j9LJXkFtZ9oLphhxylVN29wSjtyzbmU1kOc975gKcChLmzCVwSaCrxvizYynlmjfeOEZswDsS1dOGjzFsMxE4G0++7ByEOCRy81YrqK/CFJyeKki8OIVbZTBJoKcsL0Qpu2+Tzk4Qf8ehKXFbfzVBNl1vouWFF6WkYvduj79V3jUPmb7APugbeKOIoPtjxKxFGUiVuN/kcg/8znon/lAR/6dnWLWyYpsN8cxiYVtDvxAbPWP2GQ1NrBwf41QW/Ygspm24qd8SxFjstkHsDAlJCQkJCQk9AgJ+QEGrmTi+h4+rAAAAABJRU5ErkJggg=="></li>
                    <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOYSURBVGhD7ZjfS1NhGMdnv9TQCiIwCKIuu4igboJ2NnFtOtt2lrjUlmkFZmriojlT06koWiH9JJ1pRFaYleGmhros/AeCLrsxii7sIqI0le3pPfM4PNuzM885RUvOFz6gct7t853vOXvfVyFHjhw5cuTIiRBVlucAZXY3q8yejlgi4ETcWE3+LBZw+8lAiE3cfop2N7C6eCjzoBkfHHuoabeJ1Q4PRXtGsEGxCHEdZrXDQ6bVB2xQLMK4strhUdGeKWxQJPKNd8GRWQdt+nJo1F+EMkMbHKZfoNcuobM8g/OlV6DB4YDWGhs4LjjBesqFXssLcWW1w7OSIpl0H/To8uCzOgVAqQhjloqHt5qDcNbQzhlXUnINJnsOwZw3GeBNfBgfB3aBq7kQ0i39nHERkVKkTl8F36hNaAEMt0YLZksvvO5KReUxvg6lBP5L2PtzEFvEpcsHvzIOFY7Ed1UyfHLtRIX58E0kwA3nOdQjiJgirRnlqGg0pu3bALrXL+LFpSPhJ2XqKy+FuQQRWiTX2AXz1DpUVBCN5DUQYT5mxzZD1omHHJ8gQouMayhcjIefqo3gP7YGIIdMxSXyye+juDAfg7ePcHyCCClipB+DT0kEEFk+3p3Zi0qJYd6bhD/JhBRp0VegotH4cnMHwAgRCeUVAZGNxmV7NbcEg5AiT7UmVFQ0agIiGo0HbVZuCQYhRbxpSlxICsMbUFk+PHf03BIMf7vIdOpWVEYKkov0aWlUlo8Fai3ABC4kFslTq0VvQ2Wj4dOQJ52W/BxKIfk7IhqNWnsNtwSDkCIG+omox29EmoR/KTKLTMmPX4ZRjRqX4oH5Qly4nwDwiNzYyxHx+H15y8DxCSK0SI6pG+aVZK2ECPPxvmgPKiaEmbEtcNT6h5YoDGLulTlqA/zISwIoIFPTKXxKMYtG9N5YQkwRhs70k4KX8Qy/sskUEzilfBOJcL2+BPUIIrYIQ21m9Yo3Vj4qLrAyMGX3wnhnWuATxqRDYTZW9opG9P05SCnCkE73k63ucbLV3Y4WmKESYVijgaKQrW5xcTtMdivJ0px8EEiBqYHd0NF8OrCnXz4uIlKLLMdq7AgePjRn2AKHDzozv4jO8hzKSq+Cs7IqcPhQaWuA3IJ76LW88BVZNcdBq+aATmXy0NigWIQyDRlYbTzMAfF/cIhdx+ryJ5V27yeDmgjo8f4/pEllcu9jNeXIkSNHjhw53CgUvwGLAbqtlc5RDgAAAABJRU5ErkJggg=="></li>
                    <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAMISURBVGhD7VhbaxNBGO3PSKqgD0IVRYItoi8qffFBvCH46p9o0qJitNbWglFELYoIPvggaAWpaNUHFX2wFIu7adOLsTd7ibUX26ZJ01zGOV9nttlkU0kVOpQ5cNjN932TPWe+mVnYEg0NDQ0NDY0CcHnNCpfXqHf5jHtKEZq4NiFzdaDY7TMybp/J1CTX5jVqhVxnuKvMk86DFWS1cVzIzgdvW6vjIDX5SsjOB29b2GGAojTCQnY++P4Ych6kHqFVyM6HNrIO1EZUozay50o3O3zzG6u80WeLIwYeuNZri4OHAn1WfnNN0IofDPRa8VzuuNhl+4/dtSG272oP23UpZIuv2UhwNMaATIaREBmXWEplWHl9txXf39jDUmleLFB2YUVgaDwuovlATtYeawqz2FKazcZTrPK6fQLXZOTU3e/WQ4BHbVNWDoAJoOnDLyv+4NMkxaSXXCNxLtDbPGLj4/Zpqv0YnqfuwACMwJAcK7kmI61ds1YnhqYSJGKnaDXQPrjABiYTbDaWYtvOd7IyfxeLJtIsMpdkHcMLVJNrZIHnT9/vt4jJKq02WXPHDNUn+Qxggs48HLTGZbNoI1gimNXP/VG2nQsMvP1JD2p8HaE80DYQZeeej9I9rg2tEbqvfTFGOeBvSwuzjxz2g+xwi/nbGpPLoo3IJZILzPbWs0G6h1h0Ah35Mb1EOdyjM4WMzC+mSbTk3oYeqpEmp6JJutY8G7XpkSzKiFwiw9MJVvdy3OKb0Bw9pOrpCF0hFvXYIxJ33k9QrJARpz2CrgO33k3QSpjkZnBgOC2vooz4W8boj3HNjlfw0wlruDeySHlpRMaxNDyXl/dQISOF8OTLDO0V1B25vXxqgf90askzfAtfQtlxEEetXBaeupVjF3G8c+Rv5FCzSYgDkZdjc5n9vgH/+3tENWojqlEbUY3aiGpc1cgG+hy0UT7Qec0TDgOUZGn116NCtjPwgZg+FDsMVoNGxuUz/ULu6nDXmOW8O3WOn/bXkdBUWtXpETI1NDQ0NDQ07Cgp+QP4LqmR1Nz/BAAAAABJRU5ErkJggg=="></li>
                </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Find Us</h4>
                    <ol class="list-unstyled">
                        <li><a href="#" target="_blank"><img src="{{asset('images/trip.svg')}}"> </a> </li>
                        <li><a href="#" target="_blank"><img src="{{asset('images/booking.jpg')}}"> </a> </li>
                        <li><a href="#" target="_blank"><img src="{{asset('images/hostel.png')}}"></a> </li>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Extra Info</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam autem dolore doloribus dolorum ducimus earum est eum, ex expedita natus officia quisquam repellat repellendus reprehenderit, sequi sint ut veritatis voluptate voluptatibus? Deserunt dolorem enim error incidunt possimus rerum tempora.</p>
                </div>
                <div class="sidebar-module">
                    <h4>Rules</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dolorem eaque eius impedit, laudantium pariatur reiciendis. Asperiores aspernatur autem consequuntur debitis, dolore doloremque illo illum iste iure nobis quibusdam quod quos sequi similique sunt ut voluptates voluptatum! Ad cupiditate, nisi!</p>
                </div>
                <div class="sidebar-module description">
                    <p><i class="fa fa-building"></i> <a href="#apartment">Apartment</a> </p>
                    <p><i class="fa fa-rss"></i> Subscribe</p>
                    <p><i class="fa fa-envelope"></i> <a href="{{route('contact')}}">Contact</a> </p>
                </div>
            </div><!-- /. blog-side-bar -->
        </div>
    </div><!-- /.book-room -->

    @endsection