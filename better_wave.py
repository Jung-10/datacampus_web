from scipy.io import wavfile

# path  = "./DATA/"
fname = "hello.wav"

fs, data = wavfile.read(fname)

print(fs, data.shape)
print(data)

import matplotlib.pyplot as plt, mpld3

plt.figure(figsize = (12, 3))
plt.plot(data, lw = 1)
plt.xlabel("sample")
plt.ylabel("data")
plt.xlim(0, len(data))

plt.savefig('hello_test.jpg', dpi=300)

mpld3.show()